<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_ecf01f26e0b16782f63496f8a7e7663976a394055e0704b1b0840a9a72390243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe5395e4c55fa7652c1f4b273e3f29c65b5b6e6c2f7afac5a36a0a63ce3a1b7c = $this->env->getExtension("native_profiler");
        $__internal_fe5395e4c55fa7652c1f4b273e3f29c65b5b6e6c2f7afac5a36a0a63ce3a1b7c->enter($__internal_fe5395e4c55fa7652c1f4b273e3f29c65b5b6e6c2f7afac5a36a0a63ce3a1b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fe5395e4c55fa7652c1f4b273e3f29c65b5b6e6c2f7afac5a36a0a63ce3a1b7c->leave($__internal_fe5395e4c55fa7652c1f4b273e3f29c65b5b6e6c2f7afac5a36a0a63ce3a1b7c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
