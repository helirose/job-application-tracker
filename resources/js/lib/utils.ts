import { clsx, type ClassValue } from 'clsx';
import dayjs from 'dayjs';
import { twMerge } from 'tailwind-merge';

export function cn(...inputs: ClassValue[]) {
    return twMerge(clsx(inputs));
}

export const DATE_FORMAT = 'DD MMM YYYY';
export const DATETIME_FORMAT = 'DD MMM YYYY, HH:mm';

export function formatDate(date: string) {
    return dayjs(date).format(DATE_FORMAT);
}
