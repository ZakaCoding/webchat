<template>
    <div class="form-message" id="app">
        <input id="btn-input" type="text" name="message" class="chat-message" placeholder="Type your message..." v-model="newMessage" @keyup.enter="sendMessage">
        <button type="submit" class="btn-sent" id="btn-chat" @click="sendMessage">
            <i class="fas fa-location-arrow text-center"></i>
        </button>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }    
    }
</script>