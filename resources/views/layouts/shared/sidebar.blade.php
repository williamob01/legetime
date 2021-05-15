<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="" href="{{ url('/') }}" aria-expanded="false">
                    <span class="las la-hospital m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Inicio</span>
                </a>
            </li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    <span class="las la-user-alt m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Usuarios</span>
                </a>
            </li>
            <li>
                <a {{ request()->is('specialties/*') ? 'mm-active' : '' }} class="ai-icon" href="{{ route('specialties.index') }}"  aria-expanded="false">
                    <span class="las la-medkit m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Especialidades</span>
                </a>
            </li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    {{-- <span class="ti-user m-1" style="font-size: 24px;"></span> --}}
                    <span class="las la-user-nurse m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Médicos</span>
                </a>
            </li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    <span class="las la-user-injured m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Pacientes</span>
                </a>
            </li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    <span class="las la-stethoscope m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Médicos más activos</span>
                </a>
            </li>
            <li>
                <a href="#" class="ai-icon" aria-expanded="false">
                    <span class="las la-calendar m-1" style="font-size: 32px;"></span>
                    <span class="nav-text">Frecuencia de citas</span>
                </a>
            </li>
        </ul>

        <div class="plus-box">
            <p class="fs-16 font-w500 mb-1">Check your job schedule</p>
            <a class="text-white fs-26" href="javascript:;"><i class="las la-long-arrow-alt-right"></i></a>
        </div>
        <div class="copyright">
            <p class="fs-14 font-w200">&copy; {{ date('Y') }} <strong class="font-w400">Legetime</strong> - Derechos reservados</p>
            <p>Desarrollado por <span class="text-primary">Flopali Studio</span></p>
        </div>
    </div>
</div>
