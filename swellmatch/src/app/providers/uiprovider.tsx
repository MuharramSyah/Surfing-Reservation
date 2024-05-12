import {ReactNode} from "react";
import {NextUIProvider} from "@nextui-org/react";

export default function UIProviders({children}:{children: ReactNode}) {
    return <NextUIProvider>{children}</NextUIProvider>
}