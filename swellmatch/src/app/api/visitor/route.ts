import {NextRequest, NextResponse} from "next/server";


export async function GET(request: NextRequest) {
    return NextResponse.json({status: 200, message: "Book API"})
}
export async function POST(request: NextRequest) {
    const data = await request.formData()

    const res_token = await fetch(`${process.env.REST_ENDPOINT}/api/login`)
    const res_json = await res_token.json()

    if(res_token.status !== 200)
        return NextResponse.json({status: 500, message: "Internal Server Error"})

    const response = await fetch(`${process.env.REST_ENDPOINT}/api/visitors`, {
        method: "POST",
        body: data,
        headers: {
            "Authorization": `Bearer ${res_json.data.accessToken}`
        }
    });
    console.log(response)

    if(response.status === 201) {
        const ret = await response.json()
        return NextResponse.json({status: 201, message: "Booking visit successful", ...ret});
    } else {
        return NextResponse.json({...response})
    }
}