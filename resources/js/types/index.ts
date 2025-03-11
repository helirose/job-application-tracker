import type { PageProps } from '@inertiajs/core';
import type { LucideIcon } from 'lucide-vue-next';

export interface Auth {
    user: User;
}

export interface SharedData extends PageProps {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
}

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
}

export interface JobApplication {
    id: number;
    user_id: number;
    company_name: string;
    job_title: string;
    date_applied: string;
    closing_date?: string;
    location?: string;
    salary_min?: number;
    salary_max?: number;
    salary_type?: 'hourly' | 'annual';
    contact_id?: number;
    notes?: string;
    latest_event?: ApplicationEvent;
}

export interface ApplicationEvent {
    id: number;
    job_application_id: number;
    status: string;
    created_at: string;
    updated_at: string;
}

export interface File {
    id: number;
    user_id: number;
    url: string;
    title: string;
    description?: string;
    created_at: string;
    updated_at: string;
}

export interface Contact {
    id: number;
    name: string;
    email?: string;
    phone?: string;
    company_name?: string;
    job_title?: string;
    agency_id?: number;
    created_at: string;
    updated_at: string;
}

export interface Agency {
    id: number;
    name: string;
    address?: string;
    url?: string;
    created_at: string;
    updated_at: string;
}
