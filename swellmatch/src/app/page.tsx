"use client"

import Image from "next/image";
import logo from '../../public/img/Logo.svg'
import background from '../../public/img/background.jpeg'
import surface from '../../public/img/surface.png';
import sidebar_image from '../../public/img/beach.jpeg'
import Wrapper from "@/components/core/wrapper";
import {FormProvider} from "@/context/visitor";
export default function Home() {
  return (
    <main className="dark relative h-screen overflow-y-hidden">
        <div className="absolute w-full h-full md:h-auto  z-0">
            <Image src={background}
                   alt={"Background"}
                   className="w-full h-full"
            />
            <Image src={surface}
                   alt={"Surface"}
                   className="absolute top-[-50%] translate-y-2/3 md:translate-y-1/3 w-full h-full"/>
        </div>
        <div className="flex flex-col flex-1 justify-center absolute z-[1] w-screen h-screen backdrop-opacity-20-50 bg-white/30">
            <Image src={logo} alt="smell-match-logo" width={40} height={40} className="w-20 bg-transparent my-5 mx-auto"/>
            <div className="container grid md:grid-cols-12 grid-rows-1 md:w-4/6 mx-auto my-auto items-stretch">
                <div className="col-span-5 hidden md:inline-block">
                    <Image src={sidebar_image} alt="Beach" width={500} height={500} className="w-full h-full"/>
                </div>
                <div className="col-span-12 md:col-span-7 bg-[#020404] text-white">
                    <FormProvider>
                        <Wrapper/>
                    </FormProvider>
                </div>
            </div>
        </div>
    </main>
  );
}
