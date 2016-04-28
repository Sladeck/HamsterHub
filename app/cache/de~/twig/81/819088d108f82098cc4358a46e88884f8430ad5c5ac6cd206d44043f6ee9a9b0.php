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
        $__internal_326f9786647359d8af6280f13a645ce2bce466038f2a4933ee5ef689f50bdfa1 = $this->env->getExtension("native_profiler");
        $__internal_326f9786647359d8af6280f13a645ce2bce466038f2a4933ee5ef689f50bdfa1->enter($__internal_326f9786647359d8af6280f13a645ce2bce466038f2a4933ee5ef689f50bdfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326f9786647359d8af6280f13a645ce2bce466038f2a4933ee5ef689f50bdfa1->leave($__internal_326f9786647359d8af6280f13a645ce2bce466038f2a4933ee5ef689f50bdfa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_001f1b429e92c4e7f8d1fe45cc8553a732e40c3c6016b3d427f50aa02ae6a37b = $this->env->getExtension("native_profiler");
        $__internal_001f1b429e92c4e7f8d1fe45cc8553a732e40c3c6016b3d427f50aa02ae6a37b->enter($__internal_001f1b429e92c4e7f8d1fe45cc8553a732e40c3c6016b3d427f50aa02ae6a37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_001f1b429e92c4e7f8d1fe45cc8553a732e40c3c6016b3d427f50aa02ae6a37b->leave($__internal_001f1b429e92c4e7f8d1fe45cc8553a732e40c3c6016b3d427f50aa02ae6a37b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e9dbafed227ffa405950d39b14463e3657c64f9d20423adbf6464ce94bb440 = $this->env->getExtension("native_profiler");
        $__internal_91e9dbafed227ffa405950d39b14463e3657c64f9d20423adbf6464ce94bb440->enter($__internal_91e9dbafed227ffa405950d39b14463e3657c64f9d20423adbf6464ce94bb440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91e9dbafed227ffa405950d39b14463e3657c64f9d20423adbf6464ce94bb440->leave($__internal_91e9dbafed227ffa405950d39b14463e3657c64f9d20423adbf6464ce94bb440_prof);

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
