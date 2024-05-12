import {createContext, Dispatch, ReactNode, SetStateAction, useContext, useState} from "react";

interface FormContextProps {
    name: string
    setName: Dispatch<SetStateAction<string>>
    email: string
    setEmail: Dispatch<SetStateAction<string>>
    country: string
    setCountry: Dispatch<SetStateAction<string>>
    phone: string,
    setPhone: Dispatch<SetStateAction<string>>
    rating: number,
    setRating: Dispatch<SetStateAction<number>>
    visit_date: string,
    setVisitDate: Dispatch<SetStateAction<string>>
    board: string,
    setBoard: Dispatch<SetStateAction<string>>
    step: number,
    setStep: Dispatch<SetStateAction<number>>
    onHandleNext: () => void
}
const getCurrentDate = ()=> {
    const now = new Date()
    return `${now.getFullYear()}-${now.getMonth()}-${now.getDate()}`
}
const FormContext = createContext<FormContextProps>({
    name: "",
    email: "",
    country: "",
    phone: "",
    rating: 0,
    visit_date: getCurrentDate(),
    board: "",
    step: 1,
    setName: () => {},
    setEmail: () => {},
    setCountry: () => {},
    setPhone: () => {},
    setRating: () => {},
    setVisitDate: () => {},
    setBoard: () => {},
    setStep: () => {},
    onHandleNext:() => {},
})

export function FormProvider({children}: {children: ReactNode}) {
    const [name, setName] = useState<string>("")
    const [email, setEmail] = useState<string>("")
    const [country, setCountry] = useState<string>("")
    const [phone, setPhone] = useState<string>("")
    const [rating, setRating] = useState<number>(4)
    const [visit_date, setVisitDate] = useState<string>(getCurrentDate)
    const [board, setBoard] = useState<string>("")
    const [step, setStep] = useState<number>(1)

    function onHandleNext() {
        setStep(step + 1)
    }

    return <FormContext.Provider value={{name,email,country,phone,rating,visit_date,board,step,
        setName,setEmail, setCountry, setPhone, setRating, setVisitDate, setBoard, setStep, onHandleNext
    }}>
        {children}
    </FormContext.Provider>
}

export const useFormState = () => useContext(FormContext)