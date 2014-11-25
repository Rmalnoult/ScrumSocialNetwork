<?php

/* SMSSNBundle::layout.html.twig */
class __TwigTemplate_257116bc882f3664200f58ed8ca2d637563d199e9a3d384dc7dbe05b7d3055c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <div id=\"content\">
            <div id=\"header\">
                ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "            </div>
            
            <div id=\"container\">
                ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "            </div>
            <div id=\"footer\">
                ";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "            </div>
        </div>
        ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smssn/css/style.css"), "html", null, true);
        echo "\" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
        <meta charset=\"UTF-8\" />
        <title>SSN</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "                    <h1>SSN</h1>
                    <nav>
                        <ul id=\"userNav\">
                            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("smssn_homepage");
        echo "\">HOME</a></li>

                            <div>
                                ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "                                    <li>
                                        <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                  <li>
                                        <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profil", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                ";
        } else {
            // line 35
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
            echo "\">Login</a></li>
                                   <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
            echo "\">Register</a></li>
                                ";
        }
        // line 38
        echo "                            </div>

                            
                        </ul>
                    </nav>
                
                ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "                    


                    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "                        <div class=\"flash-message\">
                            <em>Notice</em>: ";
            // line 54
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                


                    <div class=\"content\">
                        ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "                        <div class=\"clear\"></div>
                    </div>


                
                    ";
        // line 72
        if (array_key_exists("code", $context)) {
            // line 73
            echo "                        <h2>Code behind this page</h2>
                        <div class=\"block\">
                            <div class=\"symfony-content\">";
            // line 75
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
                        </div>
                    ";
        }
        // line 78
        echo "                ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "                            <div>
                                ";
        // line 63
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 65
        echo "                            </div>
                        ";
    }

    // line 63
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 64
        echo "                                ";
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "                    
                ";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "SMSSNBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 87,  238 => 86,  233 => 82,  230 => 81,  226 => 64,  223 => 63,  218 => 65,  216 => 63,  213 => 62,  210 => 61,  206 => 78,  200 => 75,  196 => 73,  194 => 72,  187 => 67,  185 => 61,  179 => 57,  170 => 54,  167 => 53,  163 => 52,  158 => 49,  155 => 48,  145 => 38,  140 => 36,  135 => 35,  129 => 32,  125 => 31,  118 => 27,  114 => 26,  111 => 25,  109 => 24,  103 => 21,  98 => 18,  95 => 17,  90 => 10,  83 => 11,  81 => 10,  74 => 6,  69 => 5,  66 => 4,  61 => 89,  59 => 86,  55 => 84,  53 => 81,  49 => 79,  47 => 48,  42 => 45,  40 => 17,  34 => 13,  32 => 4,  27 => 1,);
    }
}
