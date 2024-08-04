@section('title', 'My mission | The Healthy Habit')

<x-layout>
    <div class="container md:max-w-3xl lg:max-w-5xl mx-auto my-24 grid md:grid-cols-2 gap-[20px]">
        <div class="hidden md:block">
            <img src="{{ asset("/images/headshot.jpg") }}" alt="Natasha Metcalfe" />
        </div>
        <div>
        <h1 class="text-5xl mb-8 text-[#0053c7]">Hi, I&apos;m Natasha</h1>
        <p class="text-gray-700 text-xl mb-8">I&apos;m a certified personal trainer with experience in helping clients achieve their fitness goals. My passion for health and fitness started at a young age and has grown into a fulfilling career dedicated to transforming lives through exercise and nutrition.</p>
        
        <p class="text-gray-700 text-xl mb-8">I began my fitness journey as a [describe your initial interest or background, e.g., athlete, fitness enthusiast]. Over the years, I have acquired various certifications, including [list any relevant certifications], and have had the privilege of working with clients from all walks of life. My approach is personalized, focusing on each individual's unique needs and goals.</p>
        

        <p class="text-gray-700 text-xl mb-8">With a background in [mention any relevant fields, such as sports science, nutrition, or physical therapy], I combine scientific knowledge with practical experience to deliver effective training programs. I have worked in [mention any notable places you've worked, e.g., gyms, wellness centers, private studios] and have helped clients with goals ranging from weight loss and muscle gain to improving athletic performance and overall wellness.</p>

        
        <div class="about-section">
            <h2>Services Offered</h2>
            <ul>
                <li>Personal Training Sessions</li>
                <li>Group Fitness Classes</li>
                <li>Nutrition and Meal Planning</li>
                <li>Online Coaching and Support</li>
                <li>Customized Workout Programs</li>
            </ul>
            <p>I believe in a holistic approach to fitness, which includes not only physical training but also mental and emotional well-being. My goal is to empower you to lead a healthier, happier life through sustainable lifestyle changes.</p>
        </div>
        
        <div class="about-section">
            <h2>Get in Touch</h2>
            <p>If you're ready to take the next step in your fitness journey, I would love to work with you. Feel free to <a href="contact.html">contact me</a> to schedule a consultation or to learn more about my services.</p>
        </div>
    </div>
</div>
    </div>
</x-layout>