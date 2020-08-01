<template>
    <div>
        <form class="flex flex-row">
            <HotelDatePicker :minNights="14" class="w-2/4"></HotelDatePicker>
            <input type="number" placeholder="Guests"/>
        </form>
    </div>
</template>

<script>
    import HotelDatePicker from 'vue-hotel-datepicker';

    export default {
        components: {
            HotelDatePicker,
        },

        name: "HomeBookingPicker"
    }
</script>

<style scoped>

</style>
