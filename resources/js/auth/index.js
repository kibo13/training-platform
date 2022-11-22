import { createApp } from 'vue'
import LoginForm from './pages/LoginForm'

const app = createApp({})

app.component('login-form', LoginForm)
app.mount('#auth')
