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
        $__internal_e841c51073960b2a9ede6c811145af7e7cf1f860a1002343d512bbef4689b3f4 = $this->env->getExtension("native_profiler");
        $__internal_e841c51073960b2a9ede6c811145af7e7cf1f860a1002343d512bbef4689b3f4->enter($__internal_e841c51073960b2a9ede6c811145af7e7cf1f860a1002343d512bbef4689b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e841c51073960b2a9ede6c811145af7e7cf1f860a1002343d512bbef4689b3f4->leave($__internal_e841c51073960b2a9ede6c811145af7e7cf1f860a1002343d512bbef4689b3f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7528f01da0c721d2d0f66e00e949c678e100f32c549afef2e32aa9cf821232a6 = $this->env->getExtension("native_profiler");
        $__internal_7528f01da0c721d2d0f66e00e949c678e100f32c549afef2e32aa9cf821232a6->enter($__internal_7528f01da0c721d2d0f66e00e949c678e100f32c549afef2e32aa9cf821232a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7528f01da0c721d2d0f66e00e949c678e100f32c549afef2e32aa9cf821232a6->leave($__internal_7528f01da0c721d2d0f66e00e949c678e100f32c549afef2e32aa9cf821232a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c82769c5151b5ed9568d6e83edbe0a525dd2e2b37528ddcb9418202dcbfa345 = $this->env->getExtension("native_profiler");
        $__internal_6c82769c5151b5ed9568d6e83edbe0a525dd2e2b37528ddcb9418202dcbfa345->enter($__internal_6c82769c5151b5ed9568d6e83edbe0a525dd2e2b37528ddcb9418202dcbfa345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6c82769c5151b5ed9568d6e83edbe0a525dd2e2b37528ddcb9418202dcbfa345->leave($__internal_6c82769c5151b5ed9568d6e83edbe0a525dd2e2b37528ddcb9418202dcbfa345_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_630f4c0094b1a9597d1e8801e8f117eb37e48373935c33ec341d713423b0c797 = $this->env->getExtension("native_profiler");
        $__internal_630f4c0094b1a9597d1e8801e8f117eb37e48373935c33ec341d713423b0c797->enter($__internal_630f4c0094b1a9597d1e8801e8f117eb37e48373935c33ec341d713423b0c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_630f4c0094b1a9597d1e8801e8f117eb37e48373935c33ec341d713423b0c797->leave($__internal_630f4c0094b1a9597d1e8801e8f117eb37e48373935c33ec341d713423b0c797_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e326727dacf2195b07fb3ff78c8e595566fc9f361a6af94ed24fe8843fceab12 = $this->env->getExtension("native_profiler");
        $__internal_e326727dacf2195b07fb3ff78c8e595566fc9f361a6af94ed24fe8843fceab12->enter($__internal_e326727dacf2195b07fb3ff78c8e595566fc9f361a6af94ed24fe8843fceab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e326727dacf2195b07fb3ff78c8e595566fc9f361a6af94ed24fe8843fceab12->leave($__internal_e326727dacf2195b07fb3ff78c8e595566fc9f361a6af94ed24fe8843fceab12_prof);

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
