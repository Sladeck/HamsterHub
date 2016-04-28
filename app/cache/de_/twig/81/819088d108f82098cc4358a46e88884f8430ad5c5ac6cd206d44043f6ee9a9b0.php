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
        $__internal_9425e5ae5a3a1b80a3c103b1caad22edde8ecba67a0972a2f1c5c02dbeaf7b6a = $this->env->getExtension("native_profiler");
        $__internal_9425e5ae5a3a1b80a3c103b1caad22edde8ecba67a0972a2f1c5c02dbeaf7b6a->enter($__internal_9425e5ae5a3a1b80a3c103b1caad22edde8ecba67a0972a2f1c5c02dbeaf7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9425e5ae5a3a1b80a3c103b1caad22edde8ecba67a0972a2f1c5c02dbeaf7b6a->leave($__internal_9425e5ae5a3a1b80a3c103b1caad22edde8ecba67a0972a2f1c5c02dbeaf7b6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90356305d77b045d33a3e1ef53abbbdbb50974c803fb43f0f830bab6e660fd7d = $this->env->getExtension("native_profiler");
        $__internal_90356305d77b045d33a3e1ef53abbbdbb50974c803fb43f0f830bab6e660fd7d->enter($__internal_90356305d77b045d33a3e1ef53abbbdbb50974c803fb43f0f830bab6e660fd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_90356305d77b045d33a3e1ef53abbbdbb50974c803fb43f0f830bab6e660fd7d->leave($__internal_90356305d77b045d33a3e1ef53abbbdbb50974c803fb43f0f830bab6e660fd7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e479eeaa8892efdfb9d840df3b69ec62398fa7bb00b2056314ce93c6b8486836 = $this->env->getExtension("native_profiler");
        $__internal_e479eeaa8892efdfb9d840df3b69ec62398fa7bb00b2056314ce93c6b8486836->enter($__internal_e479eeaa8892efdfb9d840df3b69ec62398fa7bb00b2056314ce93c6b8486836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e479eeaa8892efdfb9d840df3b69ec62398fa7bb00b2056314ce93c6b8486836->leave($__internal_e479eeaa8892efdfb9d840df3b69ec62398fa7bb00b2056314ce93c6b8486836_prof);

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
