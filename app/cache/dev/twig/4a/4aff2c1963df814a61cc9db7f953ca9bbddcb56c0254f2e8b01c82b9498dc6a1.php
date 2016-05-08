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
        $__internal_e3d2b8d811ce62685e8abcdc8daddce679ff808a4f6a9d51897ad45a8fd4ff80 = $this->env->getExtension("native_profiler");
        $__internal_e3d2b8d811ce62685e8abcdc8daddce679ff808a4f6a9d51897ad45a8fd4ff80->enter($__internal_e3d2b8d811ce62685e8abcdc8daddce679ff808a4f6a9d51897ad45a8fd4ff80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e3d2b8d811ce62685e8abcdc8daddce679ff808a4f6a9d51897ad45a8fd4ff80->leave($__internal_e3d2b8d811ce62685e8abcdc8daddce679ff808a4f6a9d51897ad45a8fd4ff80_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dd6da0defb3341432f2a7e7cafa87f3e3ec21726289b755ff646a6b0029bdf1 = $this->env->getExtension("native_profiler");
        $__internal_0dd6da0defb3341432f2a7e7cafa87f3e3ec21726289b755ff646a6b0029bdf1->enter($__internal_0dd6da0defb3341432f2a7e7cafa87f3e3ec21726289b755ff646a6b0029bdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0dd6da0defb3341432f2a7e7cafa87f3e3ec21726289b755ff646a6b0029bdf1->leave($__internal_0dd6da0defb3341432f2a7e7cafa87f3e3ec21726289b755ff646a6b0029bdf1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81b30582ed59192aa55fa232353fedf351747a68a33c022e025147565bbda0ee = $this->env->getExtension("native_profiler");
        $__internal_81b30582ed59192aa55fa232353fedf351747a68a33c022e025147565bbda0ee->enter($__internal_81b30582ed59192aa55fa232353fedf351747a68a33c022e025147565bbda0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81b30582ed59192aa55fa232353fedf351747a68a33c022e025147565bbda0ee->leave($__internal_81b30582ed59192aa55fa232353fedf351747a68a33c022e025147565bbda0ee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cff271bfd68b37280e72ac267d02c5ec61ea1749814972b54ae5aab1b1971376 = $this->env->getExtension("native_profiler");
        $__internal_cff271bfd68b37280e72ac267d02c5ec61ea1749814972b54ae5aab1b1971376->enter($__internal_cff271bfd68b37280e72ac267d02c5ec61ea1749814972b54ae5aab1b1971376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cff271bfd68b37280e72ac267d02c5ec61ea1749814972b54ae5aab1b1971376->leave($__internal_cff271bfd68b37280e72ac267d02c5ec61ea1749814972b54ae5aab1b1971376_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f93c0397bbeb0297cd196ab9dd564a88294902889467d82abe4979ef4ca6397 = $this->env->getExtension("native_profiler");
        $__internal_7f93c0397bbeb0297cd196ab9dd564a88294902889467d82abe4979ef4ca6397->enter($__internal_7f93c0397bbeb0297cd196ab9dd564a88294902889467d82abe4979ef4ca6397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7f93c0397bbeb0297cd196ab9dd564a88294902889467d82abe4979ef4ca6397->leave($__internal_7f93c0397bbeb0297cd196ab9dd564a88294902889467d82abe4979ef4ca6397_prof);

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
