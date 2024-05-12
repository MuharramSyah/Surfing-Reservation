import {useFormState} from "@/context/visitor";
import {z} from "zod";
import {useForm} from "react-hook-form";
import {visitor_detail_schema} from "@/schema/visitor";
import {zodResolver} from "@hookform/resolvers/zod";
import {Form, FormControl, FormField, FormItem, FormMessage} from "@/components/ui/form";
import {Input} from "@nextui-org/input";
import {
    Autocomplete,
    AutocompleteItem, Button,
    Card,
    CardBody,
    CardFooter,
    CardHeader,
} from "@nextui-org/react";
import {countries} from "@/schema/countries";
import React, {useState} from "react";
import Image from "next/image"
import {bodoni_moda} from "@/lib/font";

export default function VisitorDetailForm() {
    const {step,
        name,
        email,
        country,
        phone,
        setName,
        setEmail,
        setCountry,
        setPhone,
        onHandleNext
    } = useFormState()
    const [loading, setLoading] = useState<boolean>(false);
    const form = useForm<z.infer<typeof visitor_detail_schema>>({
        resolver: zodResolver(visitor_detail_schema),
        mode: "onTouched",
        defaultValues: {
            name: name,
            email: email,
            country: country,
            phone: phone,
        }
    })

    function handleCountry(value: any) {
        if(value) {
            form.setValue('country', value)
        }
    }

    function onSubmit(values: z.infer<typeof visitor_detail_schema>)
    {
        setName(values.name)
        setEmail(values.email)
        setCountry(values.country)
        setPhone(values.phone)
        onHandleNext()
    }

    return (
        <div>
            <Form {...form}>
                <form onSubmit={form.handleSubmit(onSubmit)}>
                    <Card className="bg-transparent h-full">
                        <CardHeader className="space-y-5 flex flex-col items-start">
                            <h1 className={`${bodoni_moda.className} text-3xl md:text-3xl lg:text-4xl xl:text-5xl`}>Book Your Visit</h1>
                            <p className="text-sm md:text-base uppercase tracking-[.1rem] md:tracking-[.25rem]">{step}/3: Visitor Details</p>
                        </CardHeader>
                        <CardBody className="grid grid-cols-1 md:grid-cols-2 grid-rows-4 md:grid-rows-2 gap-8">
                            <FormField
                                control={form.control}
                                name="name"
                                render={({field}) => (
                                    <FormItem>
                                        <FormControl>
                                            <Input
                                                isRequired
                                                radius="none"
                                                size="sm"
                                                label="Name"
                                                {...field}/>
                                        </FormControl>
                                    </FormItem>
                                )}
                            />

                            <FormField
                                control={form.control}
                                name="country"
                                render={({field}) => (
                                    <FormItem>
                                        <FormControl>
                                            <Autocomplete
                                                isRequired
                                                radius="none"
                                                label="Country"
                                                size="sm"
                                                onSelectionChange={handleCountry}
                                                classNames={{
                                                    base: [
                                                        "w-full",
                                                        "bg-[#232323]",
                                                    ],
                                                    listbox: [
                                                        "bg-[#232323]",
                                                        "text-white"
                                                    ],
                                                    popoverContent: [
                                                        "bg-[#232323]",
                                                        "rounded-none"
                                                    ],
                                                }}
                                            >
                                                {countries.map(item => <AutocompleteItem key={item.country}
                                                                                         classNames={{
                                                                                             base:[
                                                                                                 "rounded-none"
                                                                                             ],
                                                                                             title:"text-white",
                                                                                         }}
                                                                                         className="hover:text-black"
                                                                                         startContent={<Image src={item.flag} alt={item.country} width={20} height={20}/>}>
                                                        {item.country}
                                                    </AutocompleteItem>
                                                )}
                                            </Autocomplete>
                                        </FormControl>
                                    </FormItem>
                                )}
                            />
                            <FormField
                                control={form.control}
                                name="email"
                                render={({field}) => (
                                    <FormItem>
                                        <FormControl>
                                            <Input
                                                isRequired
                                                radius="none"
                                                size="sm"
                                                label="Email"
                                                type="email"
                                                {...field}/>
                                        </FormControl>
                                    </FormItem>
                                )}
                            />
                            <FormField
                                control={form.control}
                                name="phone"
                                render={({field}) => (
                                    <FormItem>
                                        <FormControl>
                                            <Input
                                                isRequired
                                                radius="none"
                                                size="sm"
                                                label="Whatsapp Number"
                                                onValueChange={field.onChange}
                                                {...field}/>
                                        </FormControl>
                                        <FormMessage/>
                                    </FormItem>
                                )}
                            />
                        </CardBody>
                        <CardFooter>
                            <Button type="submit" radius="none" color="primary" className="w-36 font-black cursor-pointer" isLoading={loading}>Next</Button>
                        </CardFooter>
                    </Card>
                </form>
            </Form>
        </div>
    )
}