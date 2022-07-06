<template>
    <div class="qr-scan">
        <qrcode-stream :camera="camera" @decode="onDecode" @init="onInit">
            <div v-if="validationSuccess" class="validation-success">
                This is a URL
            </div>

            <div v-if="validationFailure" class="validation-failure">
                This is NOT a URL!
            </div>

            <div v-if="validationPending" class="validation-pending">
                Long validation in progress...
            </div>
        </qrcode-stream>
        <h1 class="decode-result text-center link-text">
            Last result:
            <a class="btn btn-sm bg-primary link-btn" :href="result">GO</a>
        </h1>
    </div>
</template>

<script>
import { QrcodeStream } from "vue-qrcode-reader";
export default {
    components: { QrcodeStream },

    data() {
        return {
            isValid: undefined,
            camera: "auto",
            result: null,
        };
    },

    computed: {
        validationPending() {
            return this.isValid === undefined && this.camera === "off";
        },

        validationSuccess() {
            return this.isValid === true;
        },

        validationFailure() {
            return this.isValid === false;
        },
    },

    methods: {
        onInit(promise) {
            promise.catch(console.error).then(this.resetValidationState);
        },

        resetValidationState() {
            this.isValid = undefined;
        },

        async onDecode(content) {
            this.result = content;
            this.turnCameraOff();

            // pretend it's taking really long
            await this.timeout(3000);
            this.isValid = content.startsWith("http");

            // some more delay, so users have time to read the message
            await this.timeout(2000);

            this.turnCameraOn();
        },

        turnCameraOn() {
            this.camera = "auto";
        },

        turnCameraOff() {
            this.camera = "off";
        },

        timeout(ms) {
            return new Promise((resolve) => {
                window.setTimeout(resolve, ms);
            });
        },
    },
};
</script>
<style>
.drop-area {
    height: 300px;
    color: #fff;
    text-align: center;
    font-weight: bold;
    padding: 10px;

    background-color: rgba(0, 0, 0, 0.5);
}
</style>
