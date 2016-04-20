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
        $__internal_c4f5399e933b19ea765f70ceb2417f5059641d5660da6b98db7b1bb678fd0f80 = $this->env->getExtension("native_profiler");
        $__internal_c4f5399e933b19ea765f70ceb2417f5059641d5660da6b98db7b1bb678fd0f80->enter($__internal_c4f5399e933b19ea765f70ceb2417f5059641d5660da6b98db7b1bb678fd0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f5399e933b19ea765f70ceb2417f5059641d5660da6b98db7b1bb678fd0f80->leave($__internal_c4f5399e933b19ea765f70ceb2417f5059641d5660da6b98db7b1bb678fd0f80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73cfe37cf35e4b2f33d5133c63bf5f73f663cf92aea6fc266b7878a419a360ef = $this->env->getExtension("native_profiler");
        $__internal_73cfe37cf35e4b2f33d5133c63bf5f73f663cf92aea6fc266b7878a419a360ef->enter($__internal_73cfe37cf35e4b2f33d5133c63bf5f73f663cf92aea6fc266b7878a419a360ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_73cfe37cf35e4b2f33d5133c63bf5f73f663cf92aea6fc266b7878a419a360ef->leave($__internal_73cfe37cf35e4b2f33d5133c63bf5f73f663cf92aea6fc266b7878a419a360ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c45814c62323abbffcb571386b32d7e436d11149dc4ed2b09301f1a1595881c8 = $this->env->getExtension("native_profiler");
        $__internal_c45814c62323abbffcb571386b32d7e436d11149dc4ed2b09301f1a1595881c8->enter($__internal_c45814c62323abbffcb571386b32d7e436d11149dc4ed2b09301f1a1595881c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c45814c62323abbffcb571386b32d7e436d11149dc4ed2b09301f1a1595881c8->leave($__internal_c45814c62323abbffcb571386b32d7e436d11149dc4ed2b09301f1a1595881c8_prof);

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
