import {visitor} from "@/schema/visitor";
import {z} from "zod";

export default function store(data: any) {
    fetch('/api/visitor', {
        method: "POST",
        body: data,
    }).then(async(r) => {
        if(r.status === 201) {
            console.log(await r.json())
            return "Success"
        }
        throw new Error(r.statusText)
    }).catch(err => err.message)
}