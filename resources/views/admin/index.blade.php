@extends('layout.admin.index')
<style>
    .display-date {
        text-align: center;
        margin-bottom: 10px;
        font-size: 1.6rem;
        font-weight: 600;
    }
    .display-time {
        display: flex;
        font-size: 5rem;
        font-weight: bold;
        border: 2px solid #ffd868;
        padding: 10px 20px;
        border-radius: 5px;
        transition: ease-in-out 0.1s;
        transition-property: background, box-shadow, color;
        /*-webkit-box-reflect: below 2px*/
        /*linear-gradient(transparent, rgba(255, 255, 255, 0.05));*/
    }
    .display-time:hover {
        background: #ffd868;
        box-shadow: 0 0 30px#ffd868;
        color: #272727;
        cursor: pointer;
    }
    .main{
        height: calc(100% - 120px);
    }
</style>
@section('main')
    <main id="main" class="main d-flex flex-column justify-content-center">
        <div style="width: 50%;margin: 0 auto">
            <div class="display-date">
                <span id="day">day</span>,
                <span id="daynum">00</span>
                <span id="month">month</span>
                <span id="year">0000</span>
            </div>
            <div class="display-time justify-content-center"></div>
        </div>
    </main>
@endsection
@section('script')
<script>
    const displayTime = document.querySelector(".display-time");
    // Time
    function showTime() {
        let time = new Date();
        displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
        setTimeout(showTime, 1000);
    }

    showTime();

    // Date
    function updateDate() {
        let today = new Date();

        // return number
        let dayName = today.getDay(),
            dayNum = today.getDate(),
            month = today.getMonth(),
            year = today.getFullYear();

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];
        const dayWeek = [
            "Sunday",
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
        ];
        // value -> ID of the html element
        const IDCollection = ["day", "daynum", "month", "year"];
        // return value array with number as a index
        const val = [dayWeek[dayName], dayNum, months[month], year];
        for (let i = 0; i < IDCollection.length; i++) {
            document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
        }
    }

    updateDate();
</script>
@endsection
