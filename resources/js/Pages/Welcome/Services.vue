<template>
  <div id="services" class="bg-gray-50">
    <section
      aria-labelledby="features-heading"
      class="max-w-7xl mx-auto sm:px-2 lg:px-8 py-10"
    >
      <div class="max-w-2xl mx-auto px-4 lg:px-0 lg:max-w-none">
        <div class="max-w-3xl">
          <h2
            id="features-heading"
            class="
              text-3xl
              font-extrabold
              tracking-tight
              text-gray-900
              sm:text-4xl
            "
          >
            Nuestros Servicios
          </h2>
          <p class="mt-4 text-gray-500">
            En Daza Logistics ofrecemos una variedad de servicios de alta
            calidad.
          </p>
        </div>

        <TabGroup as="div" class="mt-4">
          <div class="-mx-4 flex overflow-x-auto sm:mx-0">
            <div class="flex-auto px-4 border-b border-gray-200 sm:px-0">
              <TabList class="-mb-px flex space-x-10">
                <Tab
                  as="template"
                  v-for="tab in tabs"
                  :key="tab.name"
                  v-slot="{ selected }"
                >
                  <button
                    :class="[
                      selected
                        ? 'border-blue-800 text-blue-900'
                        : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300',
                      'whitespace-nowrap py-6 border-b-2 font-medium text-sm',
                    ]"
                  >
                    {{ tab.name }}
                  </button>
                </Tab>
              </TabList>
            </div>
          </div>

          <TabPanels as="template">
            <TabPanel
              v-for="tab in tabs"
              :key="tab.name"
              class="space-y-16 pt-6"
            >
              <div v-if="tab.id == 1">
                <h3 class="text-xl font-semibold uppercase text-gray-800">
                  {{ tab.name }}
                </h3>
                <div class="pl-1">
                  <p>
                    Transportamos todo tipo de mercancías con el equipo que más
                    se adapte a sus necesidades, tomando siempre en cuenta pesos
                    y dimensiones de las mismas.
                  </p>
                  <p class="mt-6 font-semibold">
                    Soluciones logísticas para envíos terrestres.
                  </p>
                  <p>
                    Se traslada a diario materiales y productos en general
                    dentro y fuera del país en distintos tipos de unidades,
                    actualmente contamos con:
                  </p>
                  <ul class="list-disc mt-2 pl-10">
                    <li>Unidad 31/2</li>
                    <li>Rabon</li>
                    <li>Thorton</li>
                    <li>Caja de 48″</li>
                    <li>Caja de 53″</li>
                    <li>Plataformas 40″</li>
                    <li>Portacontendores</li>
                  </ul>
                </div>
              </div>
              <div v-if="tab.id == 2">
                <h3 class="text-xl font-semibold uppercase text-gray-800">
                  {{ tab.name }}
                </h3>
                <div class="pl-1">
                  <p>
                    Trasladamos mercancías peligrosas manteniendo siempre la
                    seguridad del producto así como de las personas.
                  </p>
                  <p class="mt-4">
                    Mantenemos los niveles de seguridad cuidando la integridad
                    del producto y las personas. Contamos con una política
                    medioambiental comprometidos con la reducción generada por
                    los desechos en nuestros procesos de mantenimiento, por lo
                    que contamos con programas de manejo de residuos.
                  </p>
                </div>
              </div>
              <div v-if="tab.id == 3">
                <h3 class="text-xl font-semibold uppercase text-gray-800">
                  {{ tab.name }}
                </h3>
                <div class="pl-1">
                  <p>
                    Nuestro equipo de Operaciones se encarga de diseñar una
                    estrategia que asegura la recepción, envío y entrega de
                    cuaquier tipo de mercancía que contenga sobredomension en
                    tiempo y forma.
                  </p>
                  <p class="mt-4">
                    Analizamos de manera conjunta las rutas de transporte más
                    viables para el envío de su carga.
                  </p>
                  <p class="mt-4">
                    Analizamos las necesidades especificas para la correcta
                    protección y embalaje de su carga. Investigaremos las
                    opciones de almacenamiento temporal en punto de origen o
                    destino, ante cualquier situación.
                  </p>
                </div>
              </div>
              <div v-if="tab.id == 4">
                <h3 class="text-xl font-semibold uppercase text-gray-800">
                  {{ tab.name }}
                </h3>
                <div class="pl-1">
                  <p>
                    Contamos con personal capacitado en tema de cargas
                    consolidadas así como para su seguimiento hasta la entrega
                    final.
                  </p>
                  <p class="mt-4">
                    Ofrecemeos soluciones de envío de carga inferior en México y
                    USA. Este servicio es generalmente la forma más económica de
                    enviar tu mercancia.
                  </p>
                  <p class="mt-4">
                    El flete consolidado combina el flete de diferentes
                    cargadores que se dirigen hacia la misma dirección general.
                  </p>
                  <p class="mt-4">
                    Utilizamos cross-dock en las principales ciudades de Estados
                    Unidos y México para ofrecer el servicio más rápido y eficaz
                    a nuestros clientes.
                  </p>
                </div>
              </div>
              <div v-if="tab.id == 5">
                <h3 class="text-xl font-semibold uppercase text-gray-800">
                  {{ tab.name }}
                </h3>
                <div class="pl-1">
                  <p>
                    Contamos con unidades especiales para el traslado de todo
                    tipo de mercancía, cargas frescas hasta congeladas que
                    requieren permanecer en un ambiente con temperatura
                    controlada, manteniendo en todo momento la Cadena de Frío.
                  </p>
                  <p class="mt-4">
                    <span class="font-bold">Carga Congelada:</span> Carne,
                    Fruta, Harinas, Huevo, Mariscos, Perecederos, Pescados,
                    Verdura.
                  </p>
                  <p class="mt-4">
                    <span class="font-bold">Carga Refrigerada:</span>
                    Delicatesen, Embutidos, Flores, Fruta, Lácteos, Material
                    Quirúrgico, Medicamentos, Pollo, Verdura.
                  </p>
                </div>
              </div>

              <!-- <div
                v-for="feature in tab.features"
                :key="feature.name"
                class="flex flex-col-reverse lg:grid lg:grid-cols-12 lg:gap-x-8"
              >
                <div class="mt-6 lg:mt-0 lg:col-span-5">
                  <h3 class="text-lg font-medium text-gray-900">
                    {{ feature.name }}
                  </h3>
                  <p class="mt-2 text-sm text-gray-500">
                    {{ feature.description }}
                  </p>
                </div>
                <div class="lg:col-span-7">
                  <div
                    class="
                      aspect-w-2 aspect-h-1
                      rounded-lg
                      bg-gray-100
                      overflow-hidden
                      sm:aspect-w-5 sm:aspect-h-2
                    "
                  >
                    <img
                      :src="feature.imageSrc"
                      :alt="feature.imageAlt"
                      class="object-center object-cover"
                    />
                  </div>
                </div>
              </div> -->
            </TabPanel>
          </TabPanels>
        </TabGroup>
      </div>
    </section>
  </div>
</template>

<script>
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from "@headlessui/vue";

const tabs = [
  {
    id: 1,
    name: "Transporte de Carga General",
    features: [
      {
        name: "Adaptive and modular",
        description:
          "The Organize base set allows you to configure and evolve your setup as your items and habits change. The included trays and optional add-ons are easily rearranged to achieve that perfect setup.",
        imageSrc:
          "https://tailwindui.com/img/ecommerce-images/product-feature-06-detail-01.jpg",
        imageAlt:
          "Maple organizer base with slots, supporting white polycarbonate trays of various sizes.",
      },
    ],
  },
  {
    id: 2,
    name: "Transporte de Carga Peligrosa",
    features: [
      {
        name: "Natural wood options",
        description:
          "Organize has options for rich walnut and bright maple base materials. Accent your desk with a contrasting material, or match similar woods for a calm and cohesive look. Every base is hand sanded and finished.",
        imageSrc:
          "https://tailwindui.com/img/ecommerce-images/product-feature-06-detail-02.jpg",
        imageAlt:
          "Walnut organizer base with pen, sticky note, phone, and bin trays, next to modular drink coaster attachment.",
      },
    ],
  },
  {
    id: 3,
    name: "Transporte de Carga Sobredimensionada",
    features: [
      {
        name: "Helpful around the home",
        description:
          "Our customers use Organize throughout the house to bring efficiency to many daily routines. Enjoy Organize in your workspace, kitchen, living room, entry way, garage, and more. We can't wait to see how you'll use it!",
        imageSrc:
          "https://tailwindui.com/img/ecommerce-images/product-feature-06-detail-03.jpg",
        imageAlt:
          "Walnut organizer base with white polycarbonate trays in the kitchen with various kitchen utensils.",
      },
    ],
  },
  {
    id: 4,
    name: "Transporte de Carga Consolidada",
    features: [
      {
        name: "Everything you'll need",
        description:
          "The Organize base set includes the pen, phone, small, and large trays to help you group all your essential items. Expand your set with the drink coaster and headphone stand add-ons.",
        imageSrc:
          "https://tailwindui.com/img/ecommerce-images/product-feature-06-detail-04.jpg",
        imageAlt:
          "Walnut organizer system on black leather desk mat on top of white desk.",
      },
    ],
  },
  {
    id: 5,
    name: "Transporte de Carga Refrigerada",
    features: [
      {
        name: "Everything you'll need",
        description:
          "The Organize base set includes the pen, phone, small, and large trays to help you group all your essential items. Expand your set with the drink coaster and headphone stand add-ons.",
        imageSrc:
          "https://tailwindui.com/img/ecommerce-images/product-feature-06-detail-04.jpg",
        imageAlt:
          "Walnut organizer system on black leather desk mat on top of white desk.",
      },
    ],
  },
];

export default {
  components: {
    Tab,
    TabGroup,
    TabList,
    TabPanel,
    TabPanels,
  },
  setup() {
    return {
      tabs,
    };
  },
};
</script>