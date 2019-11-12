<template>
    <div>
        <div class="clearfix" v-for="message in messages">
            <div class="chat-text chat-left float-left">
                <p>
                    {{ message.message }}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>