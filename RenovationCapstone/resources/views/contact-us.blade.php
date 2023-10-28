@include('Layout.header')

<main>
    <h1>Send Us a Message!</h1>
    <div class="contact-page-sections">
        <div class="form">
            <form action="{{route('registerUser')}}" method="post">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" >
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label for="phone">Phone no.:</label>
                    <input type="number" name="phone">
                </div>
                <div>
                    <label for="address">Address:</label>
                    <textarea name="address"  cols="30" rows="10" ></textarea>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea name="address"  cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>

        <div class="contact-info">
            <div class="contact-box">
                <span class="contact-label">Address:</span>
                <p class="address">123 Main Street<br>City, State ZIP</p>
            </div>
            <div class="contact-box">
                <span class="contact-label">Email:</span>
                <p class="email">example@example.com</p>
            </div>
            <div class="contact-box">
                <span class="contact-label">Phone:</span>
                <p class="phone">(123) 456-7890</p>
            </div>
        </div>
    </div>

</main>

@include('Layout.footer')
