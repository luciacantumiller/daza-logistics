<template>
  <div id="about_us" class="bg-white">
    <!-- Header -->
    <div class="relative pb-10 bg-gray-800">
      <div class="absolute inset-0">
        <img
          class="w-full h-full object-cover"
          src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100"
          alt=""
        />
        <div
          class="absolute inset-0 bg-gray-800 mix-blend-multiply"
          aria-hidden="true"
        />
      </div>
      <div
        class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8"
      >
        <h1
          class="
            text-4xl
            font-extrabold
            tracking-tight
            text-white
            md:text-5xl
            lg:text-6xl
          "
        >
          Daza <span class="text-yellow-500 font-thin">Logistics</span>
        </h1>
        <p class="mt-6 mb-3 max-w-3xl text-xl text-gray-300">
          Somos una empresa con experiencia en el servicio logístico aportando
          tranquilidad, obligación y el compromiso de dirigirnos a nuestros
          clientes con un trato adecuado y un servicio de calidad, ofreciendo
          servicios en cualquier parte de MEXICO, USA y CANADA diseñando una
          solución de transporte que se adapte a sus necesidades, tomando
          siempre como principal prioridad la seguridad de la mercancía.
        </p>
      </div>
    </div>

    <!-- Overlapping cards -->
    <section
      class="-mt-32 max-w-7xl mx-auto relative z-10 pb-10 px-4 sm:px-6 lg:px-8"
      aria-labelledby="contact-heading"
    >
      <div
        class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8"
      >
        <div
          v-for="link in supportLinks"
          :key="link.name"
          class="flex flex-col bg-white rounded-2xl shadow-xl"
        >
          <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
            <div
              class="
                absolute
                top-0
                p-5
                inline-block
                bg-blue-800
                rounded-xl
                shadow-lg
                transform
                -translate-y-1/2
              "
            >
              <component
                :is="link.icon"
                class="h-6 w-6 text-white"
                aria-hidden="true"
              />
            </div>
            <h3 class="text-xl font-medium text-gray-900">{{ link.name }}</h3>
            <p class="mt-4 text-base text-gray-500">{{ link.description }}</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import {
  ShieldCheckIcon,
  CurrencyDollarIcon,
  TruckIcon,
} from "@heroicons/vue/outline";

const supportLinks = [
  {
    name: "Optimización de costos",
    href: "#",
    description:
      "Gracias a la facilidad con que se manejan las cargas en este tipo de tráfico, podrás minimizar los costos de tu envío.",
    icon: CurrencyDollarIcon,
  },
  {
    name: "Agilidad de movimiento",
    href: "#",
    description:
      "Este tipo de transporte tiene fácil acceso a cualquier planta, almacén, etc.",
    icon: TruckIcon,
  },
  {
    name: "Seguridad",
    href: "#",
    description:
      "Rastreamos tu carga vía satélite durante toda su transportación, así podrás solicitar a tu ejecutivo la ubicación exacta de tu mercancía en el momento en que lo requieras. Tenga la confianza que nuestro equipo de profesionales estarán atentos a sus requerimientos desde el inicio hasta el termino de su proyecto, además de que lo mantendrá informado las 24 hrs los 365 días del año sobre el estado y ubicación de su carga sobredimensionada.",
    icon: ShieldCheckIcon,
  },
];

export default {
  setup() {
    return {
      supportLinks,
    };
  },
};
</script>