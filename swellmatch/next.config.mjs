/** @type {import('next').NextConfig} */
const nextConfig = {
    env:{
        REST_ENDPOINT: process.env.REST_ENDPOINT,
    }
};

export default nextConfig;
