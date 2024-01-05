<script setup>

    import useHome from '../services/_HomeComponent.js';
    import CardHome from '../components/HomeComponent/CardHome.vue';
    import { computed, reactive, ref } from 'vue';
    import { useRoute } from 'vue-router';

    //const { job, getProfil, experience } = useHome();
    const route = useRoute();

    const calc = reactive({
        experience: 1,
        project: 1,
        skill: 1,
        recommandation: 1
    })

    //getProfil();

    const counterAuto = () => {
        setTimeout(() => {
            Object.entries(calc).forEach(([key, value]) => {
                if (key == 'experience' && value < 1) {
                    calc.experience ++
                    counterAuto()
                }
                else if (key == 'project' && value < 5) {
                    calc.project ++
                    counterAuto()
                }
                else if (key == 'skill' && value < 64) {
                    calc.skill ++
                    counterAuto()
                }
                else if (key == 'recommandation' && value < 10) {
                    calc.recommandation ++
                    counterAuto()
                }
            });
        }, 500)
    }

    const exp = computed(() => {
        counterAuto()
    })

</script>

<template>
    <main class="flex flex-col justify-around">

        <div class="bannier w-full h-[35vh] flex flex-col items-start justify-center">
            <h1 class="text-center py-2 ml-16 text-5xl font-bold text-slate-50">Dévouvrez mon CV en ligne !</h1>
            <button type="button" class="bg-[#007acc] text-slate-50 px-4 py-2 ml-16 rounded-sm flex justify-center items-center">Téléchager le CV</button>
        </div>

        <ul class="list-none flex justify-around my-16">
            <li class="flex w-1/4 items-center justify-center">
                <span class="text-[#007acc] font-bold text-2xl">{{ calc.experience }}</span>
                <p class="text-slate-300 text-base ml-6">Année d'expérience {{ exp }}</p>
            </li>
            <li class="flex w-1/4 items-center justify-center">
                <span class="text-[#007acc] font-bold text-2xl">{{ calc.project }}</span>
                <p class="text-slate-300 text-base ml-6">Projets réalisé</p>
            </li>
            <li class="flex w-1/4 items-center justify-center">
                <span class="text-[#007acc] font-bold text-2xl">{{ calc.skill }}</span>
                <p class="text-slate-300 text-base ml-6">Compétences aquise</p>
            </li>
            <li class="flex w-1/4 items-center justify-center">
                <span class="text-[#007acc] font-bold text-2xl">{{ calc.recommandation }}</span>
                <p class="text-slate-300 text-base ml-6">Recommandations</p>
            </li>
        </ul>

        <section class="w-5/6 mx-auto my-16"> 
            <h3 class="text-slate-100 font-semibold text-2xl p-4">A propos</h3>
            <p class="text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem debitis corrupti, nisi alias reiciendis nihil laudantium eum iste quos quae inventore at odit cupiditate fuga. Quia libero voluptatum deserunt illum fugiat culpa esse ratione voluptas autem est quisquam architecto, rem molestiae veritatis dolorem numquam quidem similique quos recusandae nesciunt tempore reprehenderit repudiandae? Quos deleniti ab vero laborum, eum reiciendis ipsam modi laudantium praesentium natus sapiente soluta aperiam dolore, a veritatis eos, quibusdam voluptatem asperiores non harum obcaecati error est sit iure. Nemo vel, at quo unde similique, iusto quis nesciunt vero ex accusamus, obcaecati nostrum expedita et placeat consequatur saepe.</p>
        </section>

        <CardHome class="w-5/6 mx-auto my-16"/>
    </main>
</template>

<style scoped>

    .bannier {
        background-image: linear-gradient(rgba(0, 0, 0, 0.4),
                       rgba(0, 0, 0, 0.4)), url("../../../public/assets/images/pakata-goh-EJMTKCZ00I0-unsplash.jpg");
        background-position: center;
        background-size: cover;
    }

</style>