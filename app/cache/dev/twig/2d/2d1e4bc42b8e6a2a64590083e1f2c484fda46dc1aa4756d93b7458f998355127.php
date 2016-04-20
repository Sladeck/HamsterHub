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
        $__internal_7e1caf322789e4708a74043ffb1301b6e79fde5f1549b557e831881e293a5161 = $this->env->getExtension("native_profiler");
        $__internal_7e1caf322789e4708a74043ffb1301b6e79fde5f1549b557e831881e293a5161->enter($__internal_7e1caf322789e4708a74043ffb1301b6e79fde5f1549b557e831881e293a5161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7e1caf322789e4708a74043ffb1301b6e79fde5f1549b557e831881e293a5161->leave($__internal_7e1caf322789e4708a74043ffb1301b6e79fde5f1549b557e831881e293a5161_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_62a71a14f34c5a306a2842ee4cf167617c5923b88f644801ddbead20b8907cf9 = $this->env->getExtension("native_profiler");
        $__internal_62a71a14f34c5a306a2842ee4cf167617c5923b88f644801ddbead20b8907cf9->enter($__internal_62a71a14f34c5a306a2842ee4cf167617c5923b88f644801ddbead20b8907cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_62a71a14f34c5a306a2842ee4cf167617c5923b88f644801ddbead20b8907cf9->leave($__internal_62a71a14f34c5a306a2842ee4cf167617c5923b88f644801ddbead20b8907cf9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73085956ad747387abfe63014ba8b403c9b24acca462130f8d9abf8d79153a21 = $this->env->getExtension("native_profiler");
        $__internal_73085956ad747387abfe63014ba8b403c9b24acca462130f8d9abf8d79153a21->enter($__internal_73085956ad747387abfe63014ba8b403c9b24acca462130f8d9abf8d79153a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73085956ad747387abfe63014ba8b403c9b24acca462130f8d9abf8d79153a21->leave($__internal_73085956ad747387abfe63014ba8b403c9b24acca462130f8d9abf8d79153a21_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5861c90077c0dae2a0eddca77dc30869979a1c77c23be96e06edaec8d1739153 = $this->env->getExtension("native_profiler");
        $__internal_5861c90077c0dae2a0eddca77dc30869979a1c77c23be96e06edaec8d1739153->enter($__internal_5861c90077c0dae2a0eddca77dc30869979a1c77c23be96e06edaec8d1739153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5861c90077c0dae2a0eddca77dc30869979a1c77c23be96e06edaec8d1739153->leave($__internal_5861c90077c0dae2a0eddca77dc30869979a1c77c23be96e06edaec8d1739153_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fb10212cb2f6a2ee78e60e5e403557bbad23576be3cfe54e97b2e092d55a168 = $this->env->getExtension("native_profiler");
        $__internal_2fb10212cb2f6a2ee78e60e5e403557bbad23576be3cfe54e97b2e092d55a168->enter($__internal_2fb10212cb2f6a2ee78e60e5e403557bbad23576be3cfe54e97b2e092d55a168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fb10212cb2f6a2ee78e60e5e403557bbad23576be3cfe54e97b2e092d55a168->leave($__internal_2fb10212cb2f6a2ee78e60e5e403557bbad23576be3cfe54e97b2e092d55a168_prof);

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
