<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <div>
    <p class="text-lg">Listado de categorías</p>
  </div>
  <table
    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead
      class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">ID</th>
        <th scope="col" class="px-6 py-3">
          <div class="flex items-center">
            categoría
            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
              </svg></a>
          </div>
        </th>
        <th scope="col" class="px-6 py-3">
          <div class="flex items-center">
            Descrpción
            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
              </svg></a>
          </div>
        </th>

        <th scope="col" class="px-6 py-3">
          <span class="sr-only">Edit</span>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($respuesta['listado'] as $item) : ?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <td class="px-6 py-4"><?php echo $item->getId(); ?></td>
        <th scope="row"
          class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          <?php echo $item->getCategoria(); ?>
        </th>
        <td class="px-6 py-4"><?php echo $item->getDescripcion(); ?></td>
        <td class="px-6 py-4 text-right">
          <a href="/categorias/editar/<?php echo $item->getId(); ?>"
            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
            <a href="/categorias/borrar/<?php echo $item->getId(); ?>"
            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar</a>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <div class="flex flex-row justify-start">
    <a class="px-4 py-1 mb-2 mt-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700 rounded-xl"
              href="/categorias/nuevo">Nuevo</a>
  </div>
</div>
