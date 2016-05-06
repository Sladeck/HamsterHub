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
        $__internal_976cf602b3f9a96f55887d9e2fe3960901b02b73ad4e41042d1ae5634b8ded10 = $this->env->getExtension("native_profiler");
        $__internal_976cf602b3f9a96f55887d9e2fe3960901b02b73ad4e41042d1ae5634b8ded10->enter($__internal_976cf602b3f9a96f55887d9e2fe3960901b02b73ad4e41042d1ae5634b8ded10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_976cf602b3f9a96f55887d9e2fe3960901b02b73ad4e41042d1ae5634b8ded10->leave($__internal_976cf602b3f9a96f55887d9e2fe3960901b02b73ad4e41042d1ae5634b8ded10_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fe8701d9ab1570d38b244cc44cbe304e2940174781377067a3a4e6e12e0b980 = $this->env->getExtension("native_profiler");
        $__internal_4fe8701d9ab1570d38b244cc44cbe304e2940174781377067a3a4e6e12e0b980->enter($__internal_4fe8701d9ab1570d38b244cc44cbe304e2940174781377067a3a4e6e12e0b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4fe8701d9ab1570d38b244cc44cbe304e2940174781377067a3a4e6e12e0b980->leave($__internal_4fe8701d9ab1570d38b244cc44cbe304e2940174781377067a3a4e6e12e0b980_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da199255922524d2df32706df6f09a7791760fbdcc9d7ac8a85e303ba2af95d9 = $this->env->getExtension("native_profiler");
        $__internal_da199255922524d2df32706df6f09a7791760fbdcc9d7ac8a85e303ba2af95d9->enter($__internal_da199255922524d2df32706df6f09a7791760fbdcc9d7ac8a85e303ba2af95d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da199255922524d2df32706df6f09a7791760fbdcc9d7ac8a85e303ba2af95d9->leave($__internal_da199255922524d2df32706df6f09a7791760fbdcc9d7ac8a85e303ba2af95d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_245ae27e63e93861a5f4aaa2f7a9f71274a355bddfc4cdbbe906eb873201ccf8 = $this->env->getExtension("native_profiler");
        $__internal_245ae27e63e93861a5f4aaa2f7a9f71274a355bddfc4cdbbe906eb873201ccf8->enter($__internal_245ae27e63e93861a5f4aaa2f7a9f71274a355bddfc4cdbbe906eb873201ccf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_245ae27e63e93861a5f4aaa2f7a9f71274a355bddfc4cdbbe906eb873201ccf8->leave($__internal_245ae27e63e93861a5f4aaa2f7a9f71274a355bddfc4cdbbe906eb873201ccf8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4be96814f7d319f4de0456a092ee136ac8b613af359e7ce4111fb599bcd05a7e = $this->env->getExtension("native_profiler");
        $__internal_4be96814f7d319f4de0456a092ee136ac8b613af359e7ce4111fb599bcd05a7e->enter($__internal_4be96814f7d319f4de0456a092ee136ac8b613af359e7ce4111fb599bcd05a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4be96814f7d319f4de0456a092ee136ac8b613af359e7ce4111fb599bcd05a7e->leave($__internal_4be96814f7d319f4de0456a092ee136ac8b613af359e7ce4111fb599bcd05a7e_prof);

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
