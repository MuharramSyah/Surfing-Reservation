import localFont from "next/font/local";
import {Inter} from "next/font/google";
export const bodoni_moda = localFont({
    src: '../../public/fonts/Bodoni_Moda/BodoniModa-VariableFont_opsz.ttf',
    display:"swap",
    weight: "400",
    variable: "--font-bodoni-moda"
})

export const inter = Inter({
    subsets: ['latin'],
    display: 'swap',
    weight: "200",
});