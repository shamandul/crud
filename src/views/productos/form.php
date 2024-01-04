<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">
            <?php echo $respuesta['form']['title']; ?>
        </h2>
        <form method="post" action="<?php echo $respuesta['form']['action']; ?>">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="nombre"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                    <input type="text" name="nombre" id="nombre"
                        value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getNombre() : ''; ?>"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Escribe el nombre del producto" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="descripcion"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                    <textarea id="descripcion" rows="8" name="descripcion"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Escribe aquí la descripción del producto"><?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getDescripcion() : ''; ?></textarea>
                </div>
                <div class="sm:col-span-2">
                    <label for="nombre"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                    <input type="number" name="precio" id="precio"
                        value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getPrecio() : ''; ?>"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="0" required="" step="any">
                </div>
                <div class="sm:col-span-2">
                    <label for="nombre"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                    <input type="checkbox" name="estado" id="estado"
                        value="<?php echo isset($respuesta['form']['values']) ? $respuesta['form']['values']->getEstado() : 0; ?>"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        >
                </div>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                <?php echo $respuesta['form']['btn']; ?>
            </button>
        </form>
    </div>
</section>

