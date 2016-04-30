<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_69bfeea000e313d283276026edbdf2b7aa3abb53e89aa1dbeccc10aa69baa027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_6307f1f8dabb341cc965054e5f6908e80e0e201421e387a404d7b56077aa8582 = $this->env->getExtension("native_profiler");
        $__internal_6307f1f8dabb341cc965054e5f6908e80e0e201421e387a404d7b56077aa8582->enter($__internal_6307f1f8dabb341cc965054e5f6908e80e0e201421e387a404d7b56077aa8582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6307f1f8dabb341cc965054e5f6908e80e0e201421e387a404d7b56077aa8582->leave($__internal_6307f1f8dabb341cc965054e5f6908e80e0e201421e387a404d7b56077aa8582_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b2ef7fbb5093bc4ae5de4a8819257037eb70be493b8e5d2199ceb8fe834009d = $this->env->getExtension("native_profiler");
        $__internal_7b2ef7fbb5093bc4ae5de4a8819257037eb70be493b8e5d2199ceb8fe834009d->enter($__internal_7b2ef7fbb5093bc4ae5de4a8819257037eb70be493b8e5d2199ceb8fe834009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7b2ef7fbb5093bc4ae5de4a8819257037eb70be493b8e5d2199ceb8fe834009d->leave($__internal_7b2ef7fbb5093bc4ae5de4a8819257037eb70be493b8e5d2199ceb8fe834009d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_faa91435120afedc449742fcc1a5753e2e3fa841d25f245704013aef446d71ef = $this->env->getExtension("native_profiler");
        $__internal_faa91435120afedc449742fcc1a5753e2e3fa841d25f245704013aef446d71ef->enter($__internal_faa91435120afedc449742fcc1a5753e2e3fa841d25f245704013aef446d71ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_faa91435120afedc449742fcc1a5753e2e3fa841d25f245704013aef446d71ef->leave($__internal_faa91435120afedc449742fcc1a5753e2e3fa841d25f245704013aef446d71ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
