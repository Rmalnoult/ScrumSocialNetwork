<?php

/* SMSSNBundle::layout.html.twig */
class __TwigTemplate_4cdcf94d9080cdb4a427f834235aee38e1865663d762b6217ca8089d20f07feb extends Twig_Template
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
        // line 51
        echo "            </div>
            
            <div id=\"container\">
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo "            </div>
            <div id=\"footer\">
                ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "            </div>
        </div>
        ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
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
            echo "                                
                                    <li>
                                        <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("post_a_post");
            echo "\">
                                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Post", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    </li>                                
                                    <li>
                                        <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                  <li>
                                        <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">
                                            ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profil", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                ";
        } else {
            // line 41
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
            echo "\">Login</a></li>
                                   <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
            echo "\">Register</a></li>
                                ";
        }
        // line 44
        echo "                            </div>

                            
                        </ul>
                    </nav>
                
                ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "                    


                    ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 59
            echo "                        <div class=\"flash-message\">
                            <em>Notice</em>: ";
            // line 60
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                


                    <div class=\"content\">
                        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "                        <div class=\"clear\"></div>
                    </div>


                
                    ";
        // line 78
        if (array_key_exists("code", $context)) {
            // line 79
            echo "                        <h2>Code behind this page</h2>
                        <div class=\"block\">
                            <div class=\"symfony-content\">";
            // line 81
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
                        </div>
                    ";
        }
        // line 84
        echo "                ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "                            <div>
                                ";
        // line 69
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 71
        echo "                            </div>
                        ";
    }

    // line 69
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 70
        echo "                                ";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "                    
                ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "SMSSNBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 93,  250 => 92,  245 => 88,  242 => 87,  238 => 70,  235 => 69,  230 => 71,  228 => 69,  225 => 68,  222 => 67,  218 => 84,  212 => 81,  208 => 79,  206 => 78,  199 => 73,  197 => 67,  191 => 63,  182 => 60,  179 => 59,  175 => 58,  170 => 55,  167 => 54,  157 => 44,  152 => 42,  147 => 41,  141 => 38,  137 => 37,  130 => 33,  126 => 32,  119 => 28,  115 => 27,  111 => 25,  109 => 24,  103 => 21,  98 => 18,  95 => 17,  90 => 10,  83 => 11,  81 => 10,  74 => 6,  69 => 5,  66 => 4,  61 => 95,  59 => 92,  55 => 90,  53 => 87,  49 => 85,  47 => 54,  42 => 51,  40 => 17,  34 => 13,  32 => 4,  27 => 1,);
    }
}
