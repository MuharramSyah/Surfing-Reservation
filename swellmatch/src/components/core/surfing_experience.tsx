import React from "react";
import {useFormState} from "@/context/visitor";
import {useForm} from "react-hook-form";
import {z} from "zod";
import {surfing_experience_schema} from "@/schema/visitor";
import {zodResolver} from "@hookform/resolvers/zod";
import {

    Button, CalendarDate,
    Card,
    CardBody,
    CardFooter,
    CardHeader, DateInput, Select, SelectItem,
    Slider
} from "@nextui-org/react";
import {Form, FormControl, FormField, FormItem, FormMessage} from "@/components/ui/form";
import Image from "next/image";
import boardicon from '../../../public/img/mingcute_surfboard-line.svg'
import {boards} from "@/schema/board";
import {bodoni_moda} from "@/lib/font";

export default function SurfingExperienceFormComponent() {
    const {step,
        visit_date,
        rating,
        board,
        setVisitDate,
        setRating,
        setBoard,
        onHandleNext
    } = useFormState()

    const form = useForm<z.infer<typeof surfing_experience_schema>>({
        resolver: zodResolver(surfing_experience_schema),
        mode: "onTouched",
        defaultValues: {
            visit_date: new Date(visit_date),
            rating: rating,
            board: board,
        }
    })

    function handleSlider(value: any) {
        form.setValue('rating', value)
    }

    function handleSelect(value: any) {
        form.setValue('board', value)
    }

    function handleDate(value: any) {
        const date = new Date(value)
        form.setValue('visit_date', date)
    }

    function getStringFromDate(date: Date) {
        return `${date.getFullYear()}-${date.getMonth()}-${date.getDate()}`
    }

    function onSubmit(values: z.infer<typeof surfing_experience_schema>) {
        setVisitDate(getStringFromDate(values.visit_date))
        setRating(values.rating)
        setBoard(values.board)
        onHandleNext()
    }

    const marks = Array.from({ length: 10 }, (_, i) => i + 1)
        .map(item => {
                return {
                    label: String(item),
                    value: item
                }
            }
        )

    return (
        <>
            <Form {...form}>
                <form onSubmit={form.handleSubmit(onSubmit)}>
                    <Card className="bg-transparent h-full">
                        <CardHeader className="space-y-5 flex flex-col items-start">
                            <h1 className={`${bodoni_moda.className} text-3xl md:text-3xl lg:text-4xl xl:text-5xl`}>Book Your Visit</h1>
                            <p className="text-sm md:text-base uppercase tracking-[.1rem] md:tracking-[.25rem]">{step}/3: Surfing Experiences</p>
                        </CardHeader>
                        <CardBody>
                            <FormField
                                control={form.control}
                                name="rating"
                                render={({field}) => (
                                    <FormItem>
                                        <FormControl>
                                            <Slider
                                                label="Your Surfing Experience"
                                                step={1}
                                                maxValue={10}
                                                minValue={1}
                                                defaultValue={field.value}
                                                size="md"
                                                className="max-w-md"
                                                classNames={{
                                                    track: [
                                                        "rounded-none",
                                                        "bg-gradient-to-r from-cyan-100 to-cyan-600"
                                                    ],
                                                    filler: "bg-transparent",
                                                    label: "mb-10",
                                                    step: "hidden",
                                                    value: "hidden",
                                                    mark:[
                                                        "-top-12"
                                                    ]

                                                }}
                                                onChangeEnd={handleSlider}
                                                marks={marks}
                                                renderThumb={(props) => (
                                                    <div
                                                        {...props}
                                                        className="group top-1/2 bg-transparent border-none border-small border-default-200 dark:border-default-400/50 rounded-full cursor-grab data-[dragging=true]:cursor-grabbing"
                                                    >
                                                        <Image src={boardicon} alt={"icon"} width={30} height={30}/>
                                                    </div>
                                                )}
                                                />
                                        </FormControl>
                                        <FormMessage/>
                                    </FormItem>
                                )}
                            />
                            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <FormField
                                    control={form.control}
                                    name="visit_date"
                                    render={({field}) => (
                                        <FormItem>
                                            <FormControl>
                                                <DateInput
                                                    radius="none"
                                                    size="sm"
                                                    label="Visit date"
                                                    className="w-full"
                                                    onChange={handleDate}
                                                />
                                            </FormControl>
                                            <FormMessage/>
                                        </FormItem>
                                    )}
                                />
                                <FormField
                                    control={form.control}
                                    name="board"
                                    render={({field}) => (
                                        <FormItem>
                                            <FormControl>
                                                <Select
                                                    items={boards}
                                                    size="sm"
                                                    radius="none"
                                                    label="Your desired board"
                                                    className="w-full"
                                                    classNames={{
                                                        base: [
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
                                                    onSelectionChange={handleSelect}
                                                    {...field}
                                                >
                                                    {(item) => <SelectItem key={item.name}
                                                        classNames={{
                                                            selectedIcon:"rounded-none",
                                                            base:"rounded-none"
                                                        }}
                                                    >
                                                        {item.name}
                                                    </SelectItem>}
                                                </Select>
                                            </FormControl>
                                            <FormMessage/>
                                        </FormItem>
                                    )}
                                />
                            </div>
                        </CardBody>
                        <CardFooter>
                            <Button type="submit" radius="none" color="primary" className="w-36 font-medium">Next</Button>
                        </CardFooter>
                    </Card>
                </form>
            </Form>
        </>
    )
}