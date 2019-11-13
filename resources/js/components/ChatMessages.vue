<template>
    <div id="app">
        <chat-messages :messages="messages">
            <div class="clearfix" v-for="message in messages">
                <div class="chat-text chat-left float-left">
                    <p>
                        {{ message.message }}
                    </p>
                </div>
            </div>
        </chat-messages>
    </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>