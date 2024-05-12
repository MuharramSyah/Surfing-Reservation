import type { Metadata } from "next";
import "./globals.css";
import UIProviders from "@/app/providers/uiprovider";
import {inter} from "@/lib/font";


export const metadata: Metadata = {
  title: "Swell Match",
  description: "Generated by create next app",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
      <html lang="en">
          <body className={`${inter.className}`}>
              <UIProviders>{children}</UIProviders>
          </body>
      </html>

  );
}