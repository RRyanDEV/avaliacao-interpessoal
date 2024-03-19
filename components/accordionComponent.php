<?php

include("ratingComponent.php");

$componentArray = [
  '0' => [
    'title' => 'Qualidade de Vida', 'options' => ['Saúde', 'Diversão', 'Espiritualidade']
  ],
  '1' => [
    'title' => 'Relacionamentos', 'options' => ['Família', 'Intimidade', 'Vida social']
  ],
  '2' => [
    'title' => 'Satisfação', 'options' => ['Realização/Propósito', 'Recursos Financeiros', 'Contribuição social']
  ],
  '3' => [
    'title' => 'Profissional', 'options' => ['Desenvolvimento', 'Desempenho', 'Contatos']
  ],
];

global $componentArray;


function accordComponent($title, $option1, $option2, $option3, $rate)
{
  return ' <div class="justify-center flex flex-col items-center mt-8">
  <div class="accordion-collapse" data-accordion="collapse">
      <div class="accordion-collapse-heading-1">
          <button type="button" class="flex items-center hover:text-black justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border  border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
              <h1>Qualidade de Vida</h1>
              <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
              </svg>
          </button>
      </div>
      <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
          <div class="p-5 border bg-gray-300 text-gray-800 border-gray-200">
              <div class="flex  hover:text-white flex-row space-x-10 justify-between items-center cursor-pointer text-center">
                  <p>' . $option1 . '</p>
                  ' . $rate . '
              </div>
              <div class="flex hover:text-white flex-row space-x-10 justify-between items-center cursor-pointer text-center">
              <p>' . $option2 . '</p>
              ' . $rate . '
              </div>
              <div class="flex hover:text-white flex-row space-x-10 justify-between items-center cursor-pointer text-center">
              <p>' . $option3 . '</p>
              ' . $rate . '
              </div>
          </div>
      </div>
  </div>';
}
