<template>
  <div id="contact" class="relative bg-white">
    <div class="absolute inset-0">
      <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50" />
    </div>
    <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
      <div
        class="
          bg-gray-50
          py-16
          px-4
          sm:px-6
          lg:col-span-2 lg:px-8 lg:py-24
          xl:pr-12
        "
      >
        <div class="max-w-lg mx-auto">
          <h2
            class="
              text-2xl
              font-extrabold
              tracking-tight
              text-gray-900
              sm:text-3xl
            "
          >
            Contáctanos
          </h2>
          <p class="mt-3 text-lg leading-6 text-gray-500">
            ¡Estamos aquí para servirte! No dudes en contactarnos para cualquier
            duda o aclaración.
          </p>
          <dl class="mt-8 text-base text-gray-500">
            <div class="mt-6">
              <dt class="sr-only">Teléfono</dt>
              <dd class="flex">
                <PhoneIcon
                  class="flex-shrink-0 h-6 w-6 text-gray-400"
                  aria-hidden="true"
                />
                <span class="ml-3"> +52 (81) 2465 2908 </span>
              </dd>
              <dd class="flex mt-3">
                <PhoneIcon
                  class="flex-shrink-0 h-6 w-6 text-gray-400"
                  aria-hidden="true"
                />
                <span class="ml-3"> +52 (81) 3399 9890 </span>
              </dd>
            </div>
            <div class="mt-3">
              <dt class="sr-only">Correo electrónico</dt>
              <dd class="flex">
                <MailIcon
                  class="flex-shrink-0 h-6 w-6 text-gray-400"
                  aria-hidden="true"
                />
                <span class="ml-3"> comercial@camir-express.com </span>
              </dd>
            </div>
          </dl>
        </div>
      </div>
      <div
        class="
          bg-white
          py-16
          px-4
          sm:px-6
          lg:col-span-3 lg:py-24 lg:px-8
          xl:pl-12
        "
      >
        <div class="max-w-lg mx-auto lg:max-w-none">
          <form
            @submit.prevent="submit"
            method="POST"
            class="grid grid-cols-1 gap-y-6"
          >
            <div>
              <label for="name" class="sr-only">Nombre</label>
              <input
                v-model="form.name"
                type="text"
                name="name"
                id="name"
                autocomplete="name"
                class="
                  block
                  w-full
                  shadow-sm
                  py-3
                  px-4
                  placeholder-gray-500
                  focus:ring-blue-900 focus:border-blue-900
                  border-gray-300
                  rounded-md
                "
                placeholder="Nombre"
              />
              <p></p>
              <JetInputError
                v-if="form.errors.name"
                message="El nombre es requerido para mandar un mensaje."
                class="mt-2"
              />
            </div>

            <div>
              <label for="email" class="sr-only">Correo electrónico</label>
              <input
                v-model="form.email"
                id="email"
                name="email"
                type="email"
                autocomplete="email"
                class="
                  block
                  w-full
                  shadow-sm
                  py-3
                  px-4
                  placeholder-gray-500
                  focus:ring-blue-900 focus:border-blue-900
                  border-gray-300
                  rounded-md
                "
                placeholder="Correo electrónico"
              />
              <JetInputError
                v-if="form.errors.email"
                message="El correo electrónico es requerido para mandar un mensaje."
                class="mt-2"
              />
            </div>
            <div>
              <label for="phone" class="sr-only">Teléfono</label>
              <input
                v-model="form.phone"
                type="text"
                name="phone"
                id="phone"
                autocomplete="tel"
                class="
                  block
                  w-full
                  shadow-sm
                  py-3
                  px-4
                  placeholder-gray-500
                  focus:ring-blue-900 focus:border-blue-900
                  border-gray-300
                  rounded-md
                "
                placeholder="Teléfono"
              />
              <JetInputError
                v-if="form.errors.phone"
                message="El teléfono es requerido para mandar un mensaje."
                class="mt-2"
              />
            </div>
            <div>
              <label for="message" class="sr-only">Mensaje</label>
              <textarea
                v-model="form.message"
                id="message"
                name="message"
                rows="4"
                class="
                  block
                  w-full
                  shadow-sm
                  py-3
                  px-4
                  placeholder-gray-500
                  focus:ring-blue-900 focus:border-blue-900
                  border border-gray-300
                  rounded-md
                "
                placeholder="Mensaje"
              />
              <JetInputError
                v-if="form.errors.message"
                message="El mensaje es requerido para mandar un mensaje."
                class="mt-2"
              />
            </div>
            <div>
              <button
                type="submit"
                class="
                  inline-flex
                  justify-center
                  py-3
                  px-6
                  border border-transparent
                  shadow-sm
                  text-base
                  font-medium
                  rounded-md
                  text-white
                  bg-gray-800
                  shadow-sm
                  hover:shadow-2xl hover:bg-gray-900 hover:shadow-xl
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-gray-900
                "
              >
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { MailIcon, PhoneIcon } from "@heroicons/vue/outline";
import JetInputError from "@/Jetstream/InputError";

export default {
  components: {
    MailIcon,
    PhoneIcon,
    JetInputError,
  },
  data() {
    return {
      form: this.$inertia.form({
        name: "",
        email: "",
        phone: "",
        message: "",
      }),
    };
  },
  methods: {
    submit() {
      this.form.post(route("messages.store"), {
        errorBag: "sendMessage",
        preserveScroll: true,
        onSuccess: () => {
          this.form.name = "";
          this.form.email = "";
          this.form.phone = "";
          this.form.message = "";
        },
      });
    },
  },
};
</script>