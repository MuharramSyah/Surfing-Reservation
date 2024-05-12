import {useFormState} from "@/context/visitor";
import React, {useEffect} from "react";
import Image from "next/image";
import {countries} from "@/schema/countries";
import {useRouter} from "next/navigation";
import {bodoni_moda} from "@/lib/font";


export default function SummarizeFormComponent() {

    const {refresh} = useRouter();
    function DateString(date: Date) {
        return `${date.getDate()}/${date.getMonth()}/${date.getFullYear()}`
    }

    setTimeout(() => {
        refresh()
        console.log('Refresh')
    }, 10000)

    const {name, email, country, visit_date} = useFormState()
    return (
        <div className="">
            <span className={`${bodoni_moda.className} text-3xl md:text-3xl lg:text-4xl xl:text-5xl`}>Thank you, Name</span>
            <div className="my-5 space-y-2">
                <p className="text-muted">You&#x2019;re In!</p>
                <p className="text-base">Your store visit is booked and you&#x2019;re ready to ride the shopping wave. Here&#x2019;s your detail:</p>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2 grid-rows-4 md:grid-rows-2 gap-4">
                <div className="">
                    <span className="text-sm font-thin opacity-60">Name:</span>
                    <p>{name}</p>
                </div>
                <div className="">
                    <span className="text-sm font-thin opacity-60">Country:</span>
                    <p className="flex flex-1 gap-2">
                        {
                            countries.filter(item => item.country === country).map(item => <>
                                <Image src={item.flag} alt="Country" width={25} height={25}/>
                                {item.country}
                            </>)
                        }
                    </p>
                </div>
                <div className="">
                    <span className="text-sm font-thin opacity-60">Email:</span>
                    <p>{email}</p>
                </div>
                <div className="">
                    <span className="text-sm font-thin opacity-60">Visit date:</span>
                    <p>{DateString(new Date(visit_date))}</p>
                </div>
            </div>
            <p className="my-4">We look forward to seeing you at the #Swellmatch store! Your booking details already sent to your email and whatsapp</p>
            <span className="text-sm opacity-60">This form will refresh automatically in 10 seconds</span>
        </div>
    )
}