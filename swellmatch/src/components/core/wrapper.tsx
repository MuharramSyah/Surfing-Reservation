"use client"
import dynamic from "next/dynamic";

import {Suspense, useState} from "react";
import {useFormState} from "@/context/visitor";

const VisitorDetail = dynamic(() => import('@/components/core/visitor_detail'), {
    loading: () => <p>Loading...</p>
}), SurfingExperience = dynamic(() => import('@/components/core/surfing_experience'), {
    loading: () => <p>Loading...</p>
}), Verification = dynamic(() => import('@/components/core/verification'), {
    loading: () => <p>Loading...</p>
}), Summarize = dynamic(() => import('@/components/core/summarize'), {
    loading: () => <p>Loading...</p>
});


function ActiveStepFormComponent({step}:{step:number}) {
    switch (step) {
        case 1:
            return <VisitorDetail/>;
        case 2:
            return <SurfingExperience/>;
        case 3:
            return <Verification/>;
        case 4:
            return <Summarize/>;
        default:
            return null;
    }
}

export default function Wrapper(){
    const {step} = useFormState()
    return (
        <div className="p-8 md:p-12">
            <ActiveStepFormComponent step={step}/>
        </div>
    )
}