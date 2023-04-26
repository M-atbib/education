<template>
    <div v-if="countsave > 0">
        {{ countsave }}
    </div>
</template>

<script>
    export default {
        name:"SaveComponent",
        data(){
            return {
                countsave: 0
            }
        },
        mounted() {
            window.Echo.channel('save-count')
                .listen('SaveFormationEvent', (event) => {
                    const countnum =  event['count'];
                    console.log(countnum);
                    this.countsave = countnum;
            });
        }
    }
</script>
