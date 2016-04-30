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
        $__internal_ff2529630040dce75ffe4793d0a553de38fb931d5f1335f4bc0558e3e3e8eec6 = $this->env->getExtension("native_profiler");
        $__internal_ff2529630040dce75ffe4793d0a553de38fb931d5f1335f4bc0558e3e3e8eec6->enter($__internal_ff2529630040dce75ffe4793d0a553de38fb931d5f1335f4bc0558e3e3e8eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff2529630040dce75ffe4793d0a553de38fb931d5f1335f4bc0558e3e3e8eec6->leave($__internal_ff2529630040dce75ffe4793d0a553de38fb931d5f1335f4bc0558e3e3e8eec6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6538bfaacffbd6d12910fe71996f50ee2a946948be316c4e3f30b17c995df959 = $this->env->getExtension("native_profiler");
        $__internal_6538bfaacffbd6d12910fe71996f50ee2a946948be316c4e3f30b17c995df959->enter($__internal_6538bfaacffbd6d12910fe71996f50ee2a946948be316c4e3f30b17c995df959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6538bfaacffbd6d12910fe71996f50ee2a946948be316c4e3f30b17c995df959->leave($__internal_6538bfaacffbd6d12910fe71996f50ee2a946948be316c4e3f30b17c995df959_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16fd47cf4927c4e079fb5e2732efc4a65b61f71783b092d95ce23da5937d1809 = $this->env->getExtension("native_profiler");
        $__internal_16fd47cf4927c4e079fb5e2732efc4a65b61f71783b092d95ce23da5937d1809->enter($__internal_16fd47cf4927c4e079fb5e2732efc4a65b61f71783b092d95ce23da5937d1809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16fd47cf4927c4e079fb5e2732efc4a65b61f71783b092d95ce23da5937d1809->leave($__internal_16fd47cf4927c4e079fb5e2732efc4a65b61f71783b092d95ce23da5937d1809_prof);

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
