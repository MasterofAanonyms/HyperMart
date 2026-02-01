<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication | HyperMart</title>
    <link rel="shortcut icon" href="../public/images/icon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            yellow: '#FDB913',
                            orange: '#ff9900',
                            dark: '#1A1A1A',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main-content {
            flex: 1;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #fff9e6 0%, #fff5d6 50%, #ffedd5 100%);
        }
        
        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.5;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }
        
        .shape-2 {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #ff9900 0%, #ea580c 100%);
            bottom: -50px;
            left: -50px;
            animation-delay: 2s;
        }
        
        .shape-3 {
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, #fde047 0%, #fbbf24 100%);
            top: 50%;
            left: 10%;
            animation-delay: 4s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        .auth-card {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .input-field {
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            border-color: #ff9900;
            box-shadow: 0 0 0 3px rgba(255, 153, 0, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #ff9900 0%, #ea580c 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(234, 88, 12, 0.3);
        }
        
        .social-btn {
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .password-toggle {
            cursor: pointer;
            transition: color 0.2s;
        }
        
        .password-toggle:hover {
            color: #ff9900;
        }

        .strength-bar {
            height: 4px;
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        
        .step-indicator {
            transition: all 0.3s ease;
        }
        
        .step-indicator.active {
            background: linear-gradient(135deg, #ff9900 0%, #ea580c 100%);
            color: white;
        }
        
        .step-indicator.completed {
            background: #22c55e;
            color: white;
        }

        .form-section {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .form-section.hidden {
            display: none;
            opacity: 0;
            transform: translateY(10px);
        }

        .form-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        footer {
            color: #000;
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 2rem;
        }

        footer a {
            color: #ff9900;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="gradient-bg">
    
    <!-- Floating Shapes Background -->
    <div class="floating-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <!-- Main Content -->
    <div class="main-content flex items-center justify-center p-4 relative">
        
        <!-- Main Container -->
        <div class="w-full max-w-md relative z-10">
            
            <!-- Logo -->
            <div class="text-center mb-8">
                <a href="../index.php" class="inline-block">
                    <img src="../public/images/logo.png" alt="HyperMart" class="h-14 mx-auto">
                </a>
            </div>
            
            <!-- Auth Card -->
            <div class="auth-card rounded-3xl shadow-2xl p-8 md:p-10">
                
                <!-- SIGN IN FORM -->
                <div id="signinSection" class="form-section visible">
                    <!-- Header -->
                    <div class="text-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-900 font-display mb-2">Welcome Back!</h1>
                        <p class="text-gray-500">Sign in to continue shopping</p>
                    </div>
                    
                    <!-- Form -->
                    <form id="signinForm" class="space-y-5">
                        
                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                </span>
                                <input type="email" name="signin_email" required
                                    class="input-field w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                    placeholder="Enter your email">
                            </div>
                        </div>
                        
                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </span>
                                <input type="password" name="signin_password" id="signinPassword" required
                                    class="input-field w-full pl-12 pr-12 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                    placeholder="Enter your password">
                                <span class="password-toggle absolute right-4 top-1/2 -translate-y-1/2 text-gray-400" onclick="togglePassword('signinPassword', 'signinEyeIcon')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" id="signinEyeIcon">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="signin_remember" class="w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                <span class="text-sm text-gray-600">Remember me</span>
                            </label>
                            <a href="#" class="text-sm text-brand-orange hover:underline font-medium">Forgot Password?</a>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="btn-primary w-full py-4 text-white font-bold rounded-xl text-lg">
                            Sign In
                        </button>
                        
                    </form>
                    
                    <!-- Divider -->
                    <div class="flex items-center gap-4 my-6">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-sm text-gray-400">or continue with</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>
                    
                    <!-- Social Login -->
                    <div class="grid grid-cols-3 gap-3">
                        <button class="social-btn flex items-center justify-center gap-2 py-3 border border-gray-200 rounded-xl bg-white hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </button>
                        <button class="social-btn flex items-center justify-center gap-2 py-3 border border-gray-200 rounded-xl bg-white hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="#1877F2" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </button>
                        <button class="social-btn flex items-center justify-center gap-2 py-3 border border-gray-200 rounded-xl bg-white hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="#000" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Sign Up Link -->
                    <p class="text-center mt-8 text-gray-600">
                        Don't have an account? 
                        <button onclick="switchToSignup()" class="text-brand-orange font-semibold hover:underline bg-none border-none cursor-pointer">Sign Up</button>
                    </p>
                </div>

                <!-- SIGN UP FORM -->
                <div id="signupSection" class="form-section hidden">
                    <!-- Header -->
                    <div class="text-center mb-6">
                        <h1 class="text-3xl font-bold text-gray-900 font-display mb-2">Create Account</h1>
                        <p class="text-gray-500">Join HyperMart and start shopping</p>
                    </div>
                    
                    <!-- Progress Steps -->
                    <div class="flex items-center justify-center gap-2 mb-6">
                        <div class="step-indicator active w-8 h-8 rounded-full flex items-center justify-center text-sm font-bold" id="step1">1</div>
                        <div class="w-12 h-1 bg-gray-200 rounded" id="progress1"></div>
                        <div class="step-indicator w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-sm font-bold text-gray-400" id="step2">2</div>
                    </div>
                    
                    <!-- Form -->
                    <form id="signupForm" class="space-y-4">
                        
                        <!-- Step 1: Basic Info -->
                        <div id="formStep1">
                            <!-- Full Name -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </span>
                                    <input type="text" name="fullname" id="fullname" required
                                        class="input-field w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                        placeholder="Enter your full name">
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                        </svg>
                                    </span>
                                    <input type="email" name="email" id="email" required
                                        class="input-field w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                        placeholder="Enter your email">
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                        </svg>
                                    </span>
                                    <input type="tel" name="phone" id="phone"
                                        class="input-field w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                        placeholder="Enter your phone number">
                                </div>
                            </div>
                            
                            <!-- Next Button -->
                            <button type="button" onclick="nextStep()" class="btn-primary w-full py-4 text-white font-bold rounded-xl text-lg mt-2">
                                Continue
                            </button>
                        </div>
                        
                        <!-- Step 2: Password -->
                        <div id="formStep2" class="hidden">
                            <!-- Password -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Create Password</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </span>
                                    <input type="password" name="password" id="password" required
                                        class="input-field w-full pl-12 pr-12 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                        placeholder="Create a strong password"
                                        oninput="checkPasswordStrength(this.value)">
                                    <span class="password-toggle absolute right-4 top-1/2 -translate-y-1/2 text-gray-400" onclick="togglePassword('password', 'eyeIcon1')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" id="eyeIcon1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <!-- Password Strength -->
                                <div class="mt-2">
                                    <div class="flex gap-1">
                                        <div class="strength-bar flex-1 bg-gray-200" id="str1"></div>
                                        <div class="strength-bar flex-1 bg-gray-200" id="str2"></div>
                                        <div class="strength-bar flex-1 bg-gray-200" id="str3"></div>
                                        <div class="strength-bar flex-1 bg-gray-200" id="str4"></div>
                                    </div>
                                    <p class="text-xs text-gray-400 mt-1" id="strengthText">Password strength</p>
                                </div>
                            </div>
                            
                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                                <div class="relative">
                                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <input type="password" name="confirmPassword" id="confirmPassword" required
                                        class="input-field w-full pl-12 pr-12 py-3.5 border border-gray-200 rounded-xl focus:outline-none text-gray-700"
                                        placeholder="Confirm your password">
                                    <span class="password-toggle absolute right-4 top-1/2 -translate-y-1/2 text-gray-400" onclick="togglePassword('confirmPassword', 'eyeIcon2')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" id="eyeIcon2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <p class="text-xs text-red-500 mt-1 hidden" id="matchError">Passwords do not match</p>
                            </div>
                            
                            <!-- Terms -->
                            <div class="mb-4">
                                <label class="flex items-start gap-3 cursor-pointer">
                                    <input type="checkbox" name="terms" id="terms" required class="w-5 h-5 mt-0.5 text-orange-500 border-gray-300 rounded focus:ring-orange-500">
                                    <span class="text-sm text-gray-600">
                                        I agree to the <a href="terms-of-service.php" class="text-brand-orange hover:underline">Terms of Service</a> and <a href="privacy-policy.php" class="text-brand-orange hover:underline">Privacy Policy</a>
                                    </span>
                                </label>
                            </div>
                            
                            <!-- Buttons -->
                            <div class="flex gap-3">
                                <button type="button" onclick="prevStep()" class="flex-1 py-4 border-2 border-gray-200 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition-colors">
                                    Back
                                </button>
                                <button type="submit" class="btn-primary flex-1 py-4 text-white font-bold rounded-xl text-lg">
                                    Create Account
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    
                    <!-- Divider -->
                    <div class="flex items-center gap-4 my-6">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-sm text-gray-400">or sign up with</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>
                    
                    <!-- Social Login -->
                    <div class="grid grid-cols-3 gap-3">
                        <button class="social-btn flex items-center justify-center gap-2 py-3 border border-gray-200 rounded-xl bg-white hover:bg-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                            </svg>
                        </button>
                        <button class="social-btn flex items-center justify-center gap-2 py-3 border border-gray-200 rounded-xl bg-white hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="#1877F2" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </button>
                        <button class="social-btn flex items-center justify-center gap-2 py-3 border border-gray-200 rounded-xl bg-white hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="#000" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Sign In Link -->
                    <p class="text-center mt-6 text-gray-600">
                        Already have an account? 
                        <button onclick="switchToSignin()" class="text-brand-orange font-semibold hover:underline bg-none border-none cursor-pointer">Sign In</button>
                    </p>
                </div>
                
            </div>
            
            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="../index.php" class="inline-flex items-center gap-2 text-gray-600 hover:text-brand-orange transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Back to Home
                </a>
            </div>
            
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="max-w-6xl mx-auto">
            <p class="mb-2">&copy; 2026 <strong>HyperMart</strong>. All rights reserved.</p>
            <div class="flex justify-center gap-4 text-sm">
                <a href="privacy-policy.php" class="hover:underline">Privacy Policy</a>
                <span class="text-gray-500">|</span>
                <a href="terms-of-service.php" class="hover:underline">Terms of Service</a>
                <span class="text-gray-500">|</span>
                <a href="refund-policy.php" class="hover:underline">Refund Policy</a>
                <span class="text-gray-500">|</span>
                <a href="faq.php" class="hover:underline">FAQ</a>
            </div>
        </div>
    </footer>
    
    <script>
        let currentStep = 1;

        function switchToSignup() {
            document.getElementById('signinSection').classList.add('hidden');
            document.getElementById('signupSection').classList.remove('hidden');
            document.getElementById('signupSection').classList.add('visible');
            currentStep = 1;
            resetSignupForm();
        }

        function switchToSignin() {
            document.getElementById('signupSection').classList.add('hidden');
            document.getElementById('signinSection').classList.remove('hidden');
            document.getElementById('signinSection').classList.add('visible');
            currentStep = 1;
            resetSigninForm();
        }

        function resetSignupForm() {
            document.getElementById('formStep1').classList.remove('hidden');
            document.getElementById('formStep2').classList.add('hidden');
            document.getElementById('step1').classList.add('active');
            document.getElementById('step1').classList.remove('completed');
            document.getElementById('step1').innerHTML = '1';
            document.getElementById('step2').classList.remove('active');
            document.getElementById('progress1').style.background = '#e5e7eb';
            document.getElementById('signupForm').reset();
        }

        function resetSigninForm() {
            document.getElementById('signinForm').reset();
        }
        
        function nextStep() {
            const fullname = document.getElementById('fullname').value;
            const email = document.getElementById('email').value;
            
            if (!fullname || !email) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return;
            }
            
            currentStep = 2;
            document.getElementById('formStep1').classList.add('hidden');
            document.getElementById('formStep2').classList.remove('hidden');
            document.getElementById('step1').classList.remove('active');
            document.getElementById('step1').classList.add('completed');
            document.getElementById('step1').innerHTML = '✓';
            document.getElementById('step2').classList.add('active');
            document.getElementById('progress1').style.background = 'linear-gradient(135deg, #ff9900 0%, #ea580c 100%)';
        }
        
        function prevStep() {
            currentStep = 1;
            document.getElementById('formStep1').classList.remove('hidden');
            document.getElementById('formStep2').classList.add('hidden');
            document.getElementById('step1').classList.add('active');
            document.getElementById('step1').classList.remove('completed');
            document.getElementById('step1').innerHTML = '1';
            document.getElementById('step2').classList.remove('active');
            document.getElementById('progress1').style.background = '#e5e7eb';
        }
        
        function togglePassword(fieldId, iconId) {
            const field = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(iconId);
            
            if (field.type === 'password') {
                field.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                `;
            } else {
                field.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                `;
            }
        }
        
        function checkPasswordStrength(password) {
            const bars = ['str1', 'str2', 'str3', 'str4'];
            const strengthText = document.getElementById('strengthText');
            let strength = 0;
            
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/\d/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;
            
            bars.forEach((bar, index) => {
                const el = document.getElementById(bar);
                if (index < strength) {
                    if (strength === 1) el.style.background = '#ef4444';
                    else if (strength === 2) el.style.background = '#f97316';
                    else if (strength === 3) el.style.background = '#eab308';
                    else el.style.background = '#22c55e';
                } else {
                    el.style.background = '#e5e7eb';
                }
            });
            
            const texts = ['Weak', 'Fair', 'Good', 'Strong'];
            const colors = ['text-red-500', 'text-orange-500', 'text-yellow-500', 'text-green-500'];
            
            if (password.length === 0) {
                strengthText.textContent = 'Password strength';
                strengthText.className = 'text-xs text-gray-400 mt-1';
            } else {
                strengthText.textContent = texts[strength - 1] || 'Weak';
                strengthText.className = `text-xs mt-1 ${colors[strength - 1] || 'text-red-500'}`;
            }
        }
        
        // Signin Form submission
        document.getElementById('signinForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Sign in functionality will be implemented with backend');
        });

        // Signup Form submission
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            
            if (password !== confirmPassword) {
                document.getElementById('matchError').classList.remove('hidden');
                return;
            }
            
            document.getElementById('matchError').classList.add('hidden');
            
            if (!terms) {
                alert('Please agree to the Terms of Service and Privacy Policy');
                return;
            }
            
            alert('Account created successfully! (Backend integration needed)');
        });
        
        // Real-time password match check
        document.getElementById('confirmPassword').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            if (this.value && this.value !== password) {
                document.getElementById('matchError').classList.remove('hidden');
            } else {
                document.getElementById('matchError').classList.add('hidden');
            }
        });
    </script>
    
</body>
</html>
