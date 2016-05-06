<?php

/* ::base.html.twig */
class __TwigTemplate_aa1e59682b9fb76fbcd72d1f5e94ae699409e0fda1be741336aa7c1355572e94 extends Twig_Template
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
        $__internal_a1cf1756c8c5ce180e86feca12193ed10470cb9087b2deb6c7a3db81c9fb0fde = $this->env->getExtension("native_profiler");
        $__internal_a1cf1756c8c5ce180e86feca12193ed10470cb9087b2deb6c7a3db81c9fb0fde->enter($__internal_a1cf1756c8c5ce180e86feca12193ed10470cb9087b2deb6c7a3db81c9fb0fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a1cf1756c8c5ce180e86feca12193ed10470cb9087b2deb6c7a3db81c9fb0fde->leave($__internal_a1cf1756c8c5ce180e86feca12193ed10470cb9087b2deb6c7a3db81c9fb0fde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48bbe936a4a0ae5661e885ee1d14c92a580773aa631a22564a644b7b921cfecf = $this->env->getExtension("native_profiler");
        $__internal_48bbe936a4a0ae5661e885ee1d14c92a580773aa631a22564a644b7b921cfecf->enter($__internal_48bbe936a4a0ae5661e885ee1d14c92a580773aa631a22564a644b7b921cfecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48bbe936a4a0ae5661e885ee1d14c92a580773aa631a22564a644b7b921cfecf->leave($__internal_48bbe936a4a0ae5661e885ee1d14c92a580773aa631a22564a644b7b921cfecf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98bec2dd917c55dca9b5242716cfbd40d47cdad7a934c5c9ebc0869fc1abd998 = $this->env->getExtension("native_profiler");
        $__internal_98bec2dd917c55dca9b5242716cfbd40d47cdad7a934c5c9ebc0869fc1abd998->enter($__internal_98bec2dd917c55dca9b5242716cfbd40d47cdad7a934c5c9ebc0869fc1abd998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98bec2dd917c55dca9b5242716cfbd40d47cdad7a934c5c9ebc0869fc1abd998->leave($__internal_98bec2dd917c55dca9b5242716cfbd40d47cdad7a934c5c9ebc0869fc1abd998_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5ada55bba93b9d4f3fcf27373c27119798ae688d498e3c108916dc3865af156 = $this->env->getExtension("native_profiler");
        $__internal_f5ada55bba93b9d4f3fcf27373c27119798ae688d498e3c108916dc3865af156->enter($__internal_f5ada55bba93b9d4f3fcf27373c27119798ae688d498e3c108916dc3865af156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5ada55bba93b9d4f3fcf27373c27119798ae688d498e3c108916dc3865af156->leave($__internal_f5ada55bba93b9d4f3fcf27373c27119798ae688d498e3c108916dc3865af156_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b9d905351497f815290946daaa9d2510596f8919184f242964464c1a971a3b6 = $this->env->getExtension("native_profiler");
        $__internal_4b9d905351497f815290946daaa9d2510596f8919184f242964464c1a971a3b6->enter($__internal_4b9d905351497f815290946daaa9d2510596f8919184f242964464c1a971a3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4b9d905351497f815290946daaa9d2510596f8919184f242964464c1a971a3b6->leave($__internal_4b9d905351497f815290946daaa9d2510596f8919184f242964464c1a971a3b6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
