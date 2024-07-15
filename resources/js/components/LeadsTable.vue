<template>
    <table class="table">
        <tr v-for="(lead, i) in leads">
            <td>{{ i }}</td>
            <td>{{ lead }}</td>
        </tr>
    </table>
</template>

<script>
export default {
    name: "LeadsTable",
    props: {
        leads: {
            required: true,
            type: Array,
        }
    },
    mounted() {
        console.log("Hello world)") // fixme удолить
    }
}
</script>

<style scoped>

</style>
