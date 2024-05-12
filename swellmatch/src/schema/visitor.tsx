import {z} from "zod";

function validateWhatsAppNumber(phone: string): boolean {
    // Define the regular expression for WhatsApp phone numbers
    const whatsappRegex = /^(\+?\d{1,3}[-.\s]?)?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
    return whatsappRegex.test(phone);
}

const MAX_UPLOAD_SIZE = 1024 * 1024 * 2; // 3MB (adjust as needed)
const ACCEPTED_FILE_TYPES = ['image/png', 'image/jpeg', 'image/jpg']; // Allowed mime types (adjust as needed)

export const visitor = z.object({
    name: z.string(),
    email: z.string().email(),
    country: z.string(),
    phone: z.string().refine((value) => validateWhatsAppNumber(value), {
        message: "Invalid WhatsApp phone number format",
    }),
    rating: z.number().min(0).max(10),
    visit_date: z.date(),
    board: z.string(),
    attachment: z
        .instanceof(File) // Ensures the value is a File object
        .refine((file) => file.size <= MAX_UPLOAD_SIZE, {
            message: "File size must be less than or equal to 2MB",
        })
        .refine((file) => ACCEPTED_FILE_TYPES.includes(file.type), {
            message: "Invalid file type. Only PNG and JPEG allowed",
        }),
})

export const visitor_detail_schema = visitor.pick({
    name: true,
    email: true,
    country: true,
    phone: true,
})

export const surfing_experience_schema = visitor.pick({
    visit_date: true,
    rating: true,
    board: true,
});

export const verification_schema = visitor.pick({
    attachment: true,
});
