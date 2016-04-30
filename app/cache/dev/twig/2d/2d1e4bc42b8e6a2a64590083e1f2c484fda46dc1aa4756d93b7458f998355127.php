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
        $__internal_03b5e416ea2e09361489113511c8c7e1935d752da74b3f1cf6a71fee468675cc = $this->env->getExtension("native_profiler");
        $__internal_03b5e416ea2e09361489113511c8c7e1935d752da74b3f1cf6a71fee468675cc->enter($__internal_03b5e416ea2e09361489113511c8c7e1935d752da74b3f1cf6a71fee468675cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_03b5e416ea2e09361489113511c8c7e1935d752da74b3f1cf6a71fee468675cc->leave($__internal_03b5e416ea2e09361489113511c8c7e1935d752da74b3f1cf6a71fee468675cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_358152fbf0faaf7f1d2aa28123259fef0ef215958e4af90ec4707dab89db32eb = $this->env->getExtension("native_profiler");
        $__internal_358152fbf0faaf7f1d2aa28123259fef0ef215958e4af90ec4707dab89db32eb->enter($__internal_358152fbf0faaf7f1d2aa28123259fef0ef215958e4af90ec4707dab89db32eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_358152fbf0faaf7f1d2aa28123259fef0ef215958e4af90ec4707dab89db32eb->leave($__internal_358152fbf0faaf7f1d2aa28123259fef0ef215958e4af90ec4707dab89db32eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd215acb580eaa79f17e78d0df152ed2c5836f7fadf3cdefd31ea6881a1591d4 = $this->env->getExtension("native_profiler");
        $__internal_cd215acb580eaa79f17e78d0df152ed2c5836f7fadf3cdefd31ea6881a1591d4->enter($__internal_cd215acb580eaa79f17e78d0df152ed2c5836f7fadf3cdefd31ea6881a1591d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd215acb580eaa79f17e78d0df152ed2c5836f7fadf3cdefd31ea6881a1591d4->leave($__internal_cd215acb580eaa79f17e78d0df152ed2c5836f7fadf3cdefd31ea6881a1591d4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3c878743262dd009215ff6bae9ac979904e246b4aec689271eeeb2bc312a6fe = $this->env->getExtension("native_profiler");
        $__internal_d3c878743262dd009215ff6bae9ac979904e246b4aec689271eeeb2bc312a6fe->enter($__internal_d3c878743262dd009215ff6bae9ac979904e246b4aec689271eeeb2bc312a6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3c878743262dd009215ff6bae9ac979904e246b4aec689271eeeb2bc312a6fe->leave($__internal_d3c878743262dd009215ff6bae9ac979904e246b4aec689271eeeb2bc312a6fe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e45e358b6c63bd5178bbc72024555b5f5a02bf3c9a4e4d58cb3e3ccbfda649ac = $this->env->getExtension("native_profiler");
        $__internal_e45e358b6c63bd5178bbc72024555b5f5a02bf3c9a4e4d58cb3e3ccbfda649ac->enter($__internal_e45e358b6c63bd5178bbc72024555b5f5a02bf3c9a4e4d58cb3e3ccbfda649ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e45e358b6c63bd5178bbc72024555b5f5a02bf3c9a4e4d58cb3e3ccbfda649ac->leave($__internal_e45e358b6c63bd5178bbc72024555b5f5a02bf3c9a4e4d58cb3e3ccbfda649ac_prof);

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
