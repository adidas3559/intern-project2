<template>
    <div class="contact">
        <div class="contact__container">

            <div class="contact__form">
                <div class="contact__form__container">
                    <div class="contactLeftColumn">
                        <img src="/assets/img/contactUS.jpg" alt="contact us">
                    </div>
                    <div class="contactRightColumn">
                        <slot name="success" v-if="success"></slot>
                        <slot name="error" v-if="error"></slot>
                        
                        <form method="post" id="contact-form" ref="contactForm" @submit.prevent="send()">
                            <div class="form__group">
                                    <div class="form__row">
                                        <label for="firstName"> First Name <span class="requiredDot">*</span></label>
                                        <div class="form__input">
                                            <input type="text" class="form-field" id="firstName" name="firstName" required />
                                        </div>
                        
                                    </div>
                        
                                    <div class="form__row">
                                        <label for="lastName"> Last Name <span class="requiredDot">*</span></label>
                                        <div class="form__input">
                                            <input type="text" class="form-field" id="lastName" name="lastName" required />
                                        </div>
                                    </div>
                            </div>
                            <div class="form__group">
                                <div class="form__row">
                                    <label for="phoneNumber"> Phone Number <span class="requiredDot">*</span></label>
                                    <div class="form__input">
                                        <input type="text" class="form-field" id="phoneNumber" name="phoneNumber" required />
                                    </div>
                                </div>
                                <div class="form__row">
                                    <label for="email"> Email <span class="requiredDot">*</span></label>
                                    <div class="form__input">
                                        <input type="email" class="form-field" id="email" name="email" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <div class="form__row">
                                    <label for="city"> City </label>
                                    <div class="form__input">
                                        <input type="text" class="form-field" id="city" name="city" />
                                    </div>
                                </div>
                        
                                <div class="form__row">
                                    <label for="state"> State </label>
                                    <div class="form__input">
                                        <input type="text" class="form-field" id="state" name="state" />
                                    </div>
                                </div>
                        
                                <div class="form__row">
                                    <label for="zip"> Zip </label>
                                    <div class="form__input">
                                        <input type="text" class="form-field" id="zip" name="zip" />
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <div class="form__row">
                                    <label for="interest"> Interested In </label>
                                    <div class="form__input long">
                                        <select name="interest" id="interest">
                                            <option value="No Product Selected" disabled selected>Select an Interest</option>
                                            <option value="Sales">Sales</option>
                                            <option value="Service">Service</option>
                                            <option value="Parts">Parts</option>
                                            <option value="Rentals">Rentals</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group">
                                <div class="form__row">
                                    <label for="comments">Comments </label>
                                    <div class="form__input">
                                        <input type="text" class="form-field" id="comments" name="comments" />
                                    </div>
                                </div>
                            </div>
                            <div class="form__submit">
                                <button class="submit"> Submit </button>
                            </div>
                            <slot name="form" v-if="!success && !loading"></slot>
                            <div
                                v-if="loading"
                                class="primitive-loading">
                                Sending...
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

const ENDPOINT = `https://myprimitive.cloud/api/forms/store`
//const ENDPOINT = `http://myprimitive.cloud.test/api/forms/store`

export default {
    // props: {
    //     form: {
    //         type: String,
    //         required: true
    //     }
    // },
    data() {
        return {
            fields: {},
            success: false,
            error: false,
            loading: false
        }
    },
    methods: {
        send() {

            this.loading = true
            this.success = false 
            this.error = false

            let form = this.$refs.contactForm
            let data = new FormData(form)
            let inputs = form.elements
            let fields = {}

            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type !== "hidden" && inputs[i].name !== "") {
                    if (inputs[i].type === "checkbox" || inputs[i].type === "radio") {
                        if(inputs[i].checked) {
                            fields[inputs[i].name] ? fields[inputs[i].name] += ',' + inputs[i].value : fields[inputs[i].name] = inputs[i].value
                        }
                    } else {
                        fields[inputs[i].name] = inputs[i].value
                    }
                }
            }

            data.append('fields', JSON.stringify(fields))

            axios.post(ENDPOINT, data)
                .then(response => {
                    this.success = true
                    this.loading = false
                })
                .catch(error => {
                    this.error = true
                    this.loading = false
                });

        }
    }
}
</script>