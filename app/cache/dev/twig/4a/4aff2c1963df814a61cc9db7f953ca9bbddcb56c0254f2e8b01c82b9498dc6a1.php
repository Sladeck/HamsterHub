<?php

/* base.html.twig */
class __TwigTemplate_270f789a4fcb6e6ef85363d13d7f79c9b40761cf316aa39576dac5fb714e4250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d298733ddcc34c3fd99dd434a3b446288cc7c934f51c49173587a0cae41b802 = $this->env->getExtension("native_profiler");
        $__internal_3d298733ddcc34c3fd99dd434a3b446288cc7c934f51c49173587a0cae41b802->enter($__internal_3d298733ddcc34c3fd99dd434a3b446288cc7c934f51c49173587a0cae41b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3d298733ddcc34c3fd99dd434a3b446288cc7c934f51c49173587a0cae41b802->leave($__internal_3d298733ddcc34c3fd99dd434a3b446288cc7c934f51c49173587a0cae41b802_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7af46e71674ad8352a2814b73d36aaeb5b4266e2ae661154efcfa4b20a0a0e49 = $this->env->getExtension("native_profiler");
        $__internal_7af46e71674ad8352a2814b73d36aaeb5b4266e2ae661154efcfa4b20a0a0e49->enter($__internal_7af46e71674ad8352a2814b73d36aaeb5b4266e2ae661154efcfa4b20a0a0e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7af46e71674ad8352a2814b73d36aaeb5b4266e2ae661154efcfa4b20a0a0e49->leave($__internal_7af46e71674ad8352a2814b73d36aaeb5b4266e2ae661154efcfa4b20a0a0e49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8abfa8d198b87925a17787de643091c045fd40b0308d27a8cbf412f41cb8448 = $this->env->getExtension("native_profiler");
        $__internal_a8abfa8d198b87925a17787de643091c045fd40b0308d27a8cbf412f41cb8448->enter($__internal_a8abfa8d198b87925a17787de643091c045fd40b0308d27a8cbf412f41cb8448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a8abfa8d198b87925a17787de643091c045fd40b0308d27a8cbf412f41cb8448->leave($__internal_a8abfa8d198b87925a17787de643091c045fd40b0308d27a8cbf412f41cb8448_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdc424fc3bfe1f0e667ae2ea939ee1053ffbb3acdc09c16925ba52bed155168a = $this->env->getExtension("native_profiler");
        $__internal_bdc424fc3bfe1f0e667ae2ea939ee1053ffbb3acdc09c16925ba52bed155168a->enter($__internal_bdc424fc3bfe1f0e667ae2ea939ee1053ffbb3acdc09c16925ba52bed155168a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bdc424fc3bfe1f0e667ae2ea939ee1053ffbb3acdc09c16925ba52bed155168a->leave($__internal_bdc424fc3bfe1f0e667ae2ea939ee1053ffbb3acdc09c16925ba52bed155168a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f90cb84eb6367c3ae18b6534275e4375978f32e31953557cc545392f3ae5a6c = $this->env->getExtension("native_profiler");
        $__internal_7f90cb84eb6367c3ae18b6534275e4375978f32e31953557cc545392f3ae5a6c->enter($__internal_7f90cb84eb6367c3ae18b6534275e4375978f32e31953557cc545392f3ae5a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f90cb84eb6367c3ae18b6534275e4375978f32e31953557cc545392f3ae5a6c->leave($__internal_7f90cb84eb6367c3ae18b6534275e4375978f32e31953557cc545392f3ae5a6c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
