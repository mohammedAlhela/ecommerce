<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        mounted() {
                axios
                .get(`https://www.istanbuliat.store/admins/getData`)
                .catch((error) => {
                    alert(error)
                }).then((res)=> { 
                    console.log(res.data)
                })
        }
    }
</script>
