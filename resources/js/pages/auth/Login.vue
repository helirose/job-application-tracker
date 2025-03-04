<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div title="Log in to your account" description="Enter your email and password below to log in">
        <Head title="Log in" />

        <div v-if="status" class="mb-4 text-center text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="flex flex-col gap-6">
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <label for="email">Email address</label>
                    <input
                        id="email"
                        type="email"
                        required
                        autofocus
                        :tabindex="1"
                        autocomplete="email"
                        v-model="form.email"
                        placeholder="email@example.com"
                    />
                    <span :message="form.errors.email" ></span>
                </div>

                <div class="grid gap-2">
                    <div class="flex items-center justify-between">
                        <label for="password">Password</label>
                        <a v-if="canResetPassword" :href="route('password.request')" class="text-sm" :tabindex="5">
                            Forgot password?
                        </a>
                    </div>
                    <input
                        id="password"
                        type="password"
                        required
                        :tabindex="2"
                        autocomplete="current-password"
                        v-model="form.password"
                        placeholder="Password"
                    />
                    <span :message="form.errors.password" ></span>
                </div>

                <div class="flex items-center justify-between" :tabindex="3">
                    <label for="remember" class="flex items-center space-x-3">
                        <checkbox id="remember" v-model:checked="form.remember" :tabindex="4" />
                        <span>Remember me</span>
                    </label>
                </div>

                <button type="submit" class="mt-4 w-full" :tabindex="4" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                    Log in
                </button>
            </div>

            <div class="text-center text-sm text-muted-foreground">
                Don't have an account?
                <a :href="route('register')" :tabindex="5">Sign up</a>
            </div>
        </form>
    </div>
</template>
