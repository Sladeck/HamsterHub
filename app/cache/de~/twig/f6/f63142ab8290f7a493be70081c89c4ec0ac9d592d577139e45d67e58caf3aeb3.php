<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3539d14c1c38045fa7a6f7da5cb7e10404be27789823305987b80cdbebc96b39 extends Twig_Template
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
        $__internal_137895f7af1c1ef22dd7fd88fbec86fd06025ff6c70ea5831fbeadc2577f4cd7 = $this->env->getExtension("native_profiler");
        $__internal_137895f7af1c1ef22dd7fd88fbec86fd06025ff6c70ea5831fbeadc2577f4cd7->enter($__internal_137895f7af1c1ef22dd7fd88fbec86fd06025ff6c70ea5831fbeadc2577f4cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_137895f7af1c1ef22dd7fd88fbec86fd06025ff6c70ea5831fbeadc2577f4cd7->leave($__internal_137895f7af1c1ef22dd7fd88fbec86fd06025ff6c70ea5831fbeadc2577f4cd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
