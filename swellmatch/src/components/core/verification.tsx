import {useForm} from "react-hook-form";
import {z} from "zod";
import {verification_schema, visitor} from "@/schema/visitor";
import {zodResolver} from "@hookform/resolvers/zod";
import {Form, FormControl, FormField, FormItem, FormMessage} from "@/components/ui/form";
import { Button, Card, CardBody, CardFooter, CardHeader} from "@nextui-org/react";
import React, {useRef, useState} from "react";
import {useFormState} from "@/context/visitor";
import {File as IconFile, X} from 'lucide-react';
import store from "@/services/visitor";
import {bodoni_moda} from "@/lib/font";

export default function VerificationFormComponent() {
    const {step,
        name,
        email,
        country,
        phone,
        visit_date,
        rating,
        board, onHandleNext} = useFormState()

    const inputRef = useRef<HTMLInputElement>(null);
    const [dragActive, setDragActive] = useState<boolean>(false);
    const [isEmpty, setIsEmpty] = useState<boolean>(true);
    const [currentFile, setCurrentFile] = useState<File | undefined>(undefined);
    const [loading, setLoading] = useState<boolean>(false)
    const form = useForm<z.infer<typeof verification_schema>>({
        resolver: zodResolver(verification_schema),
        mode: "onTouched",
        defaultValues: {
            attachment: undefined
        }
    })

    function handleChange(e: any) {
        e.preventDefault();
        if(e.target.files && e.target.files[0].size > (1024 * 1024 * 2)) {
            alert("File size must be less than or equal to 2MB")
            return;
        }
        if (e.target.files && e.target.files[0]) {
            setCurrentFile(e.target.files[0])
            form.setValue('attachment', e.target.files[0])
            setIsEmpty(false);
        }
    }

    function handleDrop(e: any) {
        e.preventDefault();
        e.stopPropagation();
        setDragActive(false);
        if(e.dataTransfer.files.length > 1) {
            alert("Only 1 file accepted")
            return;
        }
        if(e.dataTransfer.files[0].size > (1024 * 1024 * 2)) {
            alert("File size must be less than or equal to 2MB")
            return;
        }
        if(e.dataTransfer.files && e.dataTransfer.files[0]) {
            setCurrentFile(e.dataTransfer.files[0])
            form.setValue('attachment', e.target.files[0])
            setIsEmpty(false);
        }
    }


    function handleDragLeave(e: any) {
        e.preventDefault();
        e.stopPropagation();
        setDragActive(false);
    }

    function handleDragOver(e: any) {
        e.preventDefault();
        e.stopPropagation();
        setDragActive(true);
    }

    function handleDragEnter(e: any) {
        e.preventDefault();
        e.stopPropagation();
        setDragActive(true);
    }

    function bytesToKb(bytes: number) {
        if (bytes === 0) {
            return 0;
        } else {
            return parseFloat((bytes / 1024).toFixed(0));
        }
    }

    function removeFile() {
        setCurrentFile(undefined);
        setIsEmpty(true);
    }

    function openFileExplorer() {
        if(inputRef.current) {
            inputRef.current.value = ""
            inputRef.current.click();
        }
    }

    function onSubmit(values: z.infer<typeof verification_schema>) {
        setLoading(true)
        const formData = new FormData();
        formData.append('name', name)
        formData.append('email', email)
        formData.append('country', country)
        formData.append('phone', phone)
        //@ts-ignore
        formData.append('rating', rating)
        formData.append('visit_date', visit_date)
        formData.append('board', board)
        if(currentFile) formData.append('attachment', currentFile)

        fetch('/api/visitor', {
            method: "POST",
            body: formData,
        }).then(async(r) => {
            if(r.status === 201) {
                console.log(await r.json())
                return "Success"
            }
            throw new Error(r.statusText)
        }).catch(err => err.message)
            .finally(() => {
                setLoading(false)
                onHandleNext()
            });
    }

    return (
        <div>
            <Form {...form}>
                <form onSubmit={form.handleSubmit(onSubmit)}>
                    <Card className="bg-transparent h-full">
                        <CardHeader className="space-y-5 flex flex-col items-start">
                            <h1 className={`${bodoni_moda.className} text-3xl md:text-3xl lg:text-4xl xl:text-5xl`}>Book Your Visit</h1>
                            <p className="text-sm md:text-base uppercase tracking-[.1rem] md:tracking-[.25rem]">{step}/3: ID Verification</p>
                        </CardHeader>
                        <CardBody>
                            <FormField
                                control={form.control}
                                name="attachment"
                                render={({field}) => (
                                    <FormItem>
                                        <FormControl>
                                            <div className={`${dragActive ? "border-white": "border-transparent"} 
                                            bg-[#1A1A1A] h-full text-center p-3 border-dashed border-3`}
                                                 onDragEnter={handleDragEnter}
                                                 onDrop={handleDrop}
                                                 onDragLeave={handleDragLeave}
                                                 onDragOver={handleDragOver}
                                            >
                                                <input type="file"
                                                       className="hidden"
                                                       multiple={false}
                                                       value={undefined}
                                                       accept=".png,.jpg,.jpeg"
                                                       ref={inputRef}
                                                       onChange={handleChange}
                                                />
                                                <div className={`${!isEmpty && "hidden"}`}>
                                                    <h1 className="font-medium">Drag & Drop</h1>
                                                    <p className="text-muted text-sm text-[#6A6A6A]">or select files from device max. 2MB</p>
                                                    <Button
                                                        radius="none"
                                                        variant="light"
                                                        onClick={openFileExplorer}
                                                        className="underline mt-5">Upload</Button>
                                                </div>
                                                {
                                                    currentFile && <div className={`flex flex-1 justify-between`}>
                                                        <div className="flex gap-2 items-center">
                                                            <IconFile size={24} className="text-[#BAFF00]"/>
                                                            <div className="text-xs space-y-1 text-left">
                                                                <h5 className="font-bold">{currentFile.name}</h5>
                                                                <p className="font-thin">{bytesToKb(currentFile.size)}KB</p>
                                                            </div>
                                                        </div>
                                                        <Button isIconOnly
                                                                color="danger"
                                                                variant="light"
                                                                onClick={removeFile}
                                                                aria-label="Close">
                                                            <X />
                                                        </Button>
                                                    </div>
                                                }

                                            </div>
                                        </FormControl>
                                        <FormMessage/>
                                    </FormItem>
                                )}
                            />
                        </CardBody>
                        <CardFooter>
                            <Button type="submit" radius="none" color="primary" className="w-36 font-black" isLoading={loading}>Book my visit</Button>
                        </CardFooter>
                    </Card>
                </form>
            </Form>
        </div>
    )
}