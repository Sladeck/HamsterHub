<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a583d1f51b99ce04a92c86bb66310a44d87e606070be438928594ac45440c52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cf7a62fefbf4ef5ba53b16fb91e5b20392630b08b0660ee2b277d72cf560957 = $this->env->getExtension("native_profiler");
        $__internal_4cf7a62fefbf4ef5ba53b16fb91e5b20392630b08b0660ee2b277d72cf560957->enter($__internal_4cf7a62fefbf4ef5ba53b16fb91e5b20392630b08b0660ee2b277d72cf560957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cf7a62fefbf4ef5ba53b16fb91e5b20392630b08b0660ee2b277d72cf560957->leave($__internal_4cf7a62fefbf4ef5ba53b16fb91e5b20392630b08b0660ee2b277d72cf560957_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adffd7b2a50759ccd827d9447546b3c24c3e42d1e8dec68b3570cf30b7f03ad8 = $this->env->getExtension("native_profiler");
        $__internal_adffd7b2a50759ccd827d9447546b3c24c3e42d1e8dec68b3570cf30b7f03ad8->enter($__internal_adffd7b2a50759ccd827d9447546b3c24c3e42d1e8dec68b3570cf30b7f03ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_adffd7b2a50759ccd827d9447546b3c24c3e42d1e8dec68b3570cf30b7f03ad8->leave($__internal_adffd7b2a50759ccd827d9447546b3c24c3e42d1e8dec68b3570cf30b7f03ad8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2b1c4bb7c12c0a829787868115d839b1256e929ba6655e34a62b887ec3d88fd = $this->env->getExtension("native_profiler");
        $__internal_b2b1c4bb7c12c0a829787868115d839b1256e929ba6655e34a62b887ec3d88fd->enter($__internal_b2b1c4bb7c12c0a829787868115d839b1256e929ba6655e34a62b887ec3d88fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b2b1c4bb7c12c0a829787868115d839b1256e929ba6655e34a62b887ec3d88fd->leave($__internal_b2b1c4bb7c12c0a829787868115d839b1256e929ba6655e34a62b887ec3d88fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
