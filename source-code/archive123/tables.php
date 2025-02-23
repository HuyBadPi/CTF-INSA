<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./../login.php");
    exit();
}
?>

<h1 class="text-3xl text-black pb-6">Tables</h1>

<div class="w-full mt-6">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Cours
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Matière</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Durée</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nb.</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Enseignant</td>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">Administration réseaux</td>
                    <td class="w-1/3 text-left py-3 px-4">21h20</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">12</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">M. BOIRET</a></td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">SOC</td>
                    <td class="w-1/3 text-left py-3 px-4">21h20</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">14</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">M. BENET</a></td>
                </tr>
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">Sécurité système</td>
                    <td class="w-1/3 text-left py-3 px-4">21h20</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">12</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">M. BRIFFAUT</a>
                    </td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Sécurité réseau</td>
                    <td class="w-1/3 text-left py-3 px-4">21h20</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">16</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">M. FORESTIER</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Étudiant
    </p>
    <div class="bg-white overflow-auto">
        <table class="text-left w-full border-collapse">
            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                <tr>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Nom</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Prénom</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Départements</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                        Email</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">Tran</td>
                    <td class="py-4 px-6 border-b border-grey-light">Nhat Huy</td>
                    <td class="py-4 px-6 border-b border-grey-light">STI</td>
                    <td class="py-4 px-6 border-b border-grey-light">nhat_huy.tran@insa-cvl.fr</td>
                </tr>
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">Leclere</td>
                    <td class="py-4 px-6 border-b border-grey-light">Simon</td>
                    <td class="py-4 px-6 border-b border-grey-light">STI</td>
                    <td class="py-4 px-6 border-b border-grey-light">simon.leclere@insa-cvl.fr</td>
                </tr>
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">Girard</td>
                    <td class="py-4 px-6 border-b border-grey-light">Nina</td>
                    <td class="py-4 px-6 border-b border-grey-light">MRI</td>
                    <td class="py-4 px-6 border-b border-grey-light">nina.girard@insa-cvl.fr</td>
                </tr>
                <tr class="hover:bg-grey-lighter">
                    <td class="py-4 px-6 border-b border-grey-light">Fidon</td>
                    <td class="py-4 px-6 border-b border-grey-light">Martin</td>
                    <td class="py-4 px-6 border-b border-grey-light">STI</td>
                    <td class="py-4 px-6 border-b border-grey-light">martin.fidon@insa-cvl.fr</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<div class="w-full mt-12">
    <p class="text-xl pb-3 flex items-center">
        <i class="fas fa-list mr-3"></i> Enseignant
    </p>
    <div class="bg-white overflow-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Prénom et Nom
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Rôle
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Email
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Statut
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                    alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Sara Taki
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">Maître de Conférences</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            sara.taki@insa-cvl.fr
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Active</span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                    alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Charlotte Renard
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">Relations Internationales</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            charlotte.renard@insa-cvl.fr
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                            <span class="relative">Active</span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                    alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Julien Olivier
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">Administratif</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">
                            julien.olivier@insa-cvl.fr
                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                            <span class="relative">Suspendu</span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-5 py-5 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                                <img class="w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                    alt="" />
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    Briffaut Jérémy
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">Directeur du STI</p>
                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">jeremy.briffaut@insa-cvl.fr</p>
                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                        <span
                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                            <span aria-hidden
                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                            <span class="relative">Inactive</span>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>